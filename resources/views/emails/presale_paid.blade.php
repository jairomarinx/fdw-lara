<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="margin:0;padding:0;background:#e9edf3;font-family:Arial,Helvetica,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#e9edf3;padding:32px 0;">
    <tr>
      <td align="center">

        <table width="640" cellpadding="0" cellspacing="0"
               style="background:#ffffff;border-radius:12px;overflow:hidden;
                      box-shadow:0 12px 32px rgba(0,0,0,0.14);">

          <!-- HEADER -->
          <tr>
            <td style="background:#111827;padding:18px 24px;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="left" style="vertical-align:middle;">
                    <img src="https://fitdonewell.com/log.png"
                         alt="Fit Done Well"
                         height="34"
                         style="display:block;">
                  </td>
                  <td align="right"
                      style="vertical-align:middle;font-size:13px;color:#e5e7eb;">
                    Receipt
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- BODY -->
          <tr>
            <td style="padding:32px 24px;">

              <div style="font-size:22px;font-weight:800;color:#111827;margin-bottom:10px;">
                Payment received
              </div>

              <div style="font-size:14px;color:#374151;line-height:1.75;margin-bottom:24px;">
                Hi {{ $presale->name ?: 'there' }},
                thank you for your purchase. Your payment was successfully processed.
              </div>

              <!-- SUMMARY -->
              <table width="100%" cellpadding="0" cellspacing="0"
                     style="border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">

                <tr>
                  <td style="padding:16px 18px;border-bottom:1px solid #e5e7eb;">
                    <div style="font-size:12px;color:#6b7280;">Item</div>
                    <div style="font-size:16px;font-weight:700;color:#111827;margin-top:4px;">
                      {{ $presale->product_name ?: $presale->product }}
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="padding:18px;background:#f3f4f6;border-bottom:1px solid #e5e7eb;">
                    <div style="font-size:12px;color:#6b7280;">Amount paid</div>
                    <div style="font-size:22px;font-weight:800;color:#111827;margin-top:6px;">
                      ${{ number_format((float)$presale->amount, 2) }} USD
                    </div>
                  </td>
                </tr>

                @if(!empty($presale->description))
                <tr>
                  <td style="padding:16px 18px;">
                    <div style="font-size:12px;color:#6b7280;margin-bottom:6px;">
                      Order details and notes
                    </div>
                    <div style="font-size:14px;color:#111827;line-height:1.75;
                                background:#f3f4f6;padding:14px 16px;border-radius:8px;">
                      {!! nl2br(e($presale->description)) !!}
                    </div>
                  </td>
                </tr>
                @endif

                <tr>
                  <td style="padding:14px 18px;">
                    <div style="font-size:12px;color:#6b7280;">Reference</div>
                    <div style="font-size:13px;color:#111827;margin-top:4px;">
                      Presale ID: {{ $presale->id }}
                      @if(!empty($presale->stripe_payment_intent_id))
                        <span style="color:#9ca3af;"> | </span>
                        {{ $presale->stripe_payment_intent_id }}
                      @endif
                    </div>
                  </td>
                </tr>

              </table>

              <div style="margin-top:22px;font-size:13px;color:#6b7280;line-height:1.75;">
                If you have any questions, simply reply to this email and we will help you.
              </div>

            </td>
          </tr>

          <!-- FOOTER -->
          <tr>
            <td style="padding:18px 24px;background:#111827;color:#ffffff;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="left" style="font-size:13px;font-weight:600;">
                    Fit Done Well
                  </td>
                </tr>
                <tr>
                  <td align="left" style="font-size:12px;color:#9ca3af;padding-top:4px;">
                    {{ config('app.url') }}
                  </td>
                </tr>
              </table>
            </td>
          </tr>

        </table>

        <div style="width:640px;max-width:92vw;margin-top:16px;
                    font-size:12px;color:#9ca3af;text-align:center;">
          This is an automated email. No action is required.
        </div>

      </td>
    </tr>
  </table>
</body>
</html>
