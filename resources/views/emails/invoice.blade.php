@extends('layouts.dashboard.app')
@section('content')
<div class="" id="hide-hoalp">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
      <div class="email-from d-flex mt-3">
        <span class="mx-3">From:</span>
        <a href="#">Nicolas Grayson nicolas.durant@demosolutions.com nicolas.durant&gt;</a>
        <span class="mx-3">(Role : Collector)</span>
      </div>
      <div class="email-to d-flex  mt-3">
        <span class="mx-3">to:</span>
        <a href="#">Nicolas Grayson nicolas.durant@demosolutions.com nicolas.durant&gt;</a>
        <span class="mx-3">(Role : Other)</span>
      </div>
      <div class="emil-para-2 mt-3 mb-3">
        <p class="text-capitalize mt-3 mb-3">{{ $data['subject'] }}</p>
      </div>
      <div class="email-prev">
        <p> 
        Dear Client, <br>
        Please find below a statement of account showing a total outstanding of: {{ number_format($data['items_amount_overdue_exclude_disputes_include_late_penalties'], 2) }}. <br>
        We are sure that you simply forgot to send us your payment and we would be grateful if you could rectify this
        situation as soon as possible. <br>
        Don't hesitate to click on the following button to share your comments with us:</p>
        <div class="view-button mt-3 mb-3">
          <a href="" class="btn btn-success"><span><svg class="svg-inline--fa fa-comments" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"></path></svg><!-- <i class="fa-solid fa-comments"></i> Font Awesome fontawesome.com --></span> View my account
            statement</a>
        </div>
        <div class="descri">
          <p>In anticipation of your payment, we remain at your disposal for any information you may need. <br>
            Best regards,</p>
        </div>
        <div class="the-cloumn  d-flex align-items-center mb-3">
          <img src="img/person2.jpg" class="img-fluid" alt="">
          <div class="name text-center">
            <h6 class="mt-3 mb-3">{{ $data['my_name'] }}</h6>
            <p class="mt-3 mb-3">{{ $data['my_phone'] }} <br>
             
            {{ $data['my_company_name'] }}</p>
            <a href="#">http://www.demo-solutions.com </a>
          </div>
          <div class="logo-mail">
            <img src="{{ asset($data['my_company_logo']) }}" class="img-fluid" alt="">
          </div>
        </div>
        <div class="client-code">
          <h6>Client code: {{ $data['client_code'] }}</h6>
          <div class="client-codes d-flex justify-content-between align-items-center">
            <p><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> Click the Trans No. for more information and write a comment:</p>
            <div class="this-buttons">
            <button type="button" class="btn text-light"><span><svg class="svg-inline--fa fa-download" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"></path></svg><!-- <i class="fa-solid fa-download"></i> Font Awesome fontawesome.com --> </span>Export this data to excel</button>
              </div>
            </div>
            <div class="tabels-emails">
              <div class="container-fluid">
                <div class="table-responsive mt-3 mb-3">
                    <table class="table table-bordered">
                        <thead class="thead-dark ">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Trans No.	</th>
                                <th>Company</th>
                                <th>Issue date</th>
                                <th>Due date	</th>
                                <th>	Overdue</th>
                                <th>Initial amount
                                  inc. Tax</th>
                                <th>Remaining
                                  amount inc. Tax</th>
                                <th>Custom
                                  field #2</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td style="background: #f0f0f0;">1</td>
                                <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href=""> 414472</a></td>
                                <td>Eros Proin Ultrices Foundation (B)</td>
                                <td>2024-04-05</td>
                                <td>2024-04-05</td>
                                <td>77 d</td>
                                <td>7,112.64 €	</td>
                                <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                                <td></td>
                            </tr>
                            <tr>
                              <td colspan="7" class="text-end">April 2024 - Total	</td>
                              <td>7,112.64 €	</td>
                              <td></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="tabels-emails">
              <div class="container-fluid">
                <div class="table-responsive mt-3 mb-3">
                    <table class="table table-bordered">
                        <tbody class="text-center">
                            <tr>
                                <td style="background: #f0f0f0;">2</td>
                                <td style="display: flex; "><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href="">_</a></td>
                                <td>Eros Proin Ultrices Foundation (B)</td>
                                <td>2024-04-05</td>
                                <td>2024-04-05</td>
                                <td>77 d</td>
                                <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                                <td>7,112.64 €	</td>
                            </tr>
                            <tr>
                              <td style="background: #f0f0f0;">3</td>
                              <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href="">414472</a></td>
                              <td>Eros Proin Ultrices Foundation (B)</td>
                              <td>2024-04-05</td>
                              <td>2024-04-05</td>
                              <td>77 d</td>
                              <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                              <td>7,112.64 €	</td>
                              <td></td>
                          </tr>
                          <tr>
                            <td style="background: #f0f0f0;">4</td>
                            <td style="display: flex; "><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href="">_</a></td>
                            <td>Eros Proin Ultrices Foundation (B)</td>
                            <td>2024-04-05</td>
                            <td>2024-04-05</td>
                            <td>77 d</td>
                            <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                            <td>7,112.64 €	</td>
                            <td></td>
                        </tr>
                        <tr>
                          <td colspan="7" class="text-end">April 2024 - Total	</td>
                          <td>7,112.64 €	</td>
                          <td></td>
                      </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
          </div>          
        </div>
</div>
</div>
</div>
</div>
@endsection
@push('scripts')
@endpush