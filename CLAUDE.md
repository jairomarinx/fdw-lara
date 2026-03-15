# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# Start all dev services (server, queue, logs, Vite hot reload)
composer dev

# Run tests
composer test
php artisan test                    # All tests
php artisan test --filter TestName  # Single test

# Build frontend assets
npm run dev    # Dev server with hot reload
npm run build  # Production build

# Database
php artisan migrate
php artisan tinker

# Code style (PHP)
./vendor/bin/pint
```

## Architecture

**Stack**: Laravel 12 + Blade + Alpine.js + Tailwind CSS + Stripe + Vite

### Request Flow
1. Routes defined in `routes/web.php` map URLs to controllers
2. `FitController` handles most public-facing pages (services, programs, products)
3. Checkout: `CheckoutController` creates Stripe sessions; `routes/web.php` handles success/cancel redirects
4. Stripe webhook (`/stripe/webhook`) → `CheckoutController@webhook` → updates `Presale` record + sends `PresalePaidMail`

### Key Files
- `config/products.php` — Central product catalog (172 products) with names, prices, and category flags (`meal`, `fit`, `fit-subscription`)
- `routes/web.php` — All routes; dynamic checkout uses `/general-checkout/{product}` where `{product}` maps to a key in `config/products.php`
- `app/Http/Controllers/FitController.php` — 30+ methods for service/program/product landing pages
- `app/Models/Presale.php` — Order/payment records; tracks Stripe session, payment intent, status, and customer info

### Database Models
- `users` — Laravel Breeze auth
- `contacts` — Contact form submissions
- `presales` — Purchase records with Stripe fields (`stripe_session_id`, `stripe_payment_intent_id`, `payment_status`, `paid_at`)

### Payment Flow
User selects product → `/general-checkout/{product}` (form) → POST `/checkout/pay` → Presale created + Stripe Checkout Session → Stripe redirect → webhook updates Presale + sends email

### Frontend
- Alpine.js for interactivity (dropdowns, tabs, modals) initialized in `resources/js/app.js`
- Blade components in `resources/views/components/` and `app/View/Components/`
- Tailwind CSS with `@tailwindcss/forms` plugin

### Environment
- Dev uses ngrok URL (`APP_URL`) to receive Stripe webhooks locally
- SQLite in-memory for tests (configured in `phpunit.xml`)
- `APP_ENV=local` uses database queue driver; tests use sync queue
