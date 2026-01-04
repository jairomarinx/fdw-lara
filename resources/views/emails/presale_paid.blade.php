<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin:0;padding:0;background:#f6f7fb;font-family:Arial,Helvetica,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f6f7fb;padding:24px 0;">
    <tr>
      <td align="center">
        <table width="640" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 6px 24px rgba(0,0,0,0.08);">
          <tr>
            <td style="padding:22px 24px;background:#ffffff;border-bottom:1px solid #eef0f4;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="left" style="vertical-align:middle;">
                    <h1>Fit.Done.Well.</h1>
                  </td>
                  <td align="right" style="vertical-align:middle;color:#667085;font-size:13px;">
                    Receipt
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="padding:26px 24px;">
              <div style="font-size:20px;font-weight:700;color:#111827;margin-bottom:8px;">
                Payment received
              </div>

              <div style="font-size:14px;color:#374151;line-height:1.6;margin-bottom:18px;">
                Hi {{ $presale->name ?: 'there' }}, thanks for your purchase. Your payment was successfully processed.
              </div>

              <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #eef0f4;border-radius:10px;">
                <tr>
                  <td style="padding:14px 16px;border-bottom:1px solid #eef0f4;">
                    <div style="font-size:13px;color:#667085;">Item</div>
                    <div style="font-size:15px;color:#111827;font-weight:700;">
                      {{ $presale->product_name ?: $presale->product }}
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="padding:14px 16px;border-bottom:1px solid #eef0f4;">
                    <div style="font-size:13px;color:#667085;">Amount</div>
                    <div style="font-size:15px;color:#111827;font-weight:700;">
                      ${{ number_format((float)$presale->amount, 2) }} USD
                    </div>
                  </td>
                </tr>

                @if(!empty($presale->description))
                <tr>
                  <td style="padding:14px 16px;border-bottom:1px solid #eef0f4;">
                    <div style="font-size:13px;color:#667085;">Details</div>
                    <div style="font-size:14px;color:#111827;line-height:1.6;">
                      {!! nl2br(e($presale->description)) !!}
                    </div>
                  </td>
                </tr>
                @endif

                <tr>
                  <td style="padding:14px 16px;">
                    <div style="font-size:13px;color:#667085;">Reference</div>
                    <div style="font-size:14px;color:#111827;">
                      Presale ID: {{ $presale->id }}
                      @if(!empty($presale->stripe_payment_intent_id))
                        <span style="color:#667085;"> | </span>
                        Payment: {{ $presale->stripe_payment_intent_id }}
                      @endif
                    </div>
                  </td>
                </tr>
              </table>

              <div style="margin-top:18px;font-size:13px;color:#667085;line-height:1.6;">
                If you have any questions, reply to this email and we will help you.
              </div>
            </td>
          </tr>

          <tr>
            <td style="padding:18px 24px;background:#111827;color:#ffffff;">
              <div style="font-size:13px;opacity:0.9;">
                Fit Done Well
              </div>
              <div style="font-size:12px;opacity:0.7;margin-top:4px;">
                {{ config('app.url') }}
              </div>
            </td>
          </tr>
        </table>

        <div style="width:640px;max-width:92vw;margin-top:14px;font-size:12px;color:#98a2b3;text-align:center;">
          This is an automated email.
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
