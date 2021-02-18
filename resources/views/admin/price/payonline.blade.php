@extends('templates.admin.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-8">
                                    <h3 style="font-size: 20px">THÔNG BÁO TRIỂN KHAI THANH TOÁN KHÔNG DÙNG TIỀN MẶT TẠI KÝ TÚC XÁ TP ĐÀ NẴNG</h3>
                                    <p style="margin-top: 10px">Thực hiện Nghị quyết số 02/NQ-CP ngày 01/01/2019 của Chính phủ về việc đẩy mạnh 
                                    thanh toán không dùng tiền mặt và Quyết định số 241/QĐ-TTg ngày 23/02/2018 của Thủ tướng Chính phủ phê duyệt 
                                    Đề án đẩy mạnh thanh toán qua ngân hàng đối với các dịch vụ công thuế, điện, nước, học phí, viện phí và chi 
                                    trả các chương trình an sinh xã hội…</p>
                                    <img style="height: 300px;whidth:380px;margin:25px" src="/storage/app/public/files/payonline.jpg" alt="">
                                    <p>Nay KTX triển khai thanh toán thanh toán Phí lưu trú, tiền điện không dùng tiền mặt trên ứng dụng ViettelPay, cụ thể như sau:</p>
                                    <p>1. Đối tượng áp dụng: Tất cả sinh viên đang lưu trú tại Ký túc xá sinh viên thành phố Đà Nẵng (Phụ huynh có thể nộp phí thay)</p>
                                    <p>2. Thời gian áp dụng: <span style="color: black">Kể từ ngày 15 tháng 6 năm 2020</span></p>
                                    <p>3. Hướng dẫn cách thanh toán:</p>
                                    <iframe width="540" height="315" style="margin:30px" src="https://www.youtube.com/embed/N1V_yLKrIzs" frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    </iframe>
                                    <div>
                                        <p style="color:red">Lưu ý:</p>
                                        <p style="color:red;margin-left:10px">-> Đối với trường hợp sinh viên ở bao phòng, khi thanh toán người nộp phải thanh toán cho cả phòng</p>
                                        <p style="color:red;margin-left:10px">-> Khi triển khai KTX sẽ bố trí bộ phận kỹ thuật trước văn phòng KTX để hỗ trợ các bạn sinh viên cài đặt 
                                            cũng như cách liên kết thẻ ngân hàng, nạp tiền vào app ViettelPay để thanh toán phí KTX.
                                        </p>
                                    </div>
                                    <div>
                                        <p style="color:blue;margin-top:10px;font-size:16px">CHƯƠNG TRÌNH KHUYẾN MÃI KHI ĐĂNG KÝ VÀ THANH TOÁN PHÍ KTX TRÊN VIETTELPAY, Paypal:</p>
                                        <p style="color:black;">1. Đối với Sinh viên đăng ký mới Viettelpay:</p>
                                        <p style="margin-left:10px">-> Tặng <span style="color:black">30.000đ </span>trong vòng 03 tháng (mỗi tháng 10.000đ) khi thanh toán thành công phí KTX trên app viettelpay.</p>
                                        <p style="margin-left:10px">-> Đối với thuê bao Viettel: Khi nạp thẻ cào điện thoại, chiết khấu 10%. Áp dụng trong 06 tháng (không giới hạn số lần nạp).</p>
                                        <p style="color:black;">2. Sinh viên khi thanh toán phí KTX có cơ hội quay số ngẫu nhiên trúng 10 phần quà trị giá 300.000đ:</p>
                                        <p style="color:black;">3. Sinh viên khi thanh toán phí KTX bằng Paypal:</p>
                                        <p style="color:red;">-> Khi thanh toán phí online sẽ được cộng 10$ vào tài khoản:</p>
                                            @if(Auth::check())
                                            @php
                                                $user =Auth::user();
                                                $id_user = $user->id_user;
                                            @endphp
                                        @endif
                                        <script src="https://js.stripe.com/v3/"></script>
                                    <form action="{{ route('admin.charge') }}" method="post" id="payment-form">
                                    @csrf
                                        <div class="form-row">
                                            <p><input type="text" name="amount" placeholder="Enter Amount" /></p>
                                            <p><input type="email" name="email" placeholder="Enter Email" /></p>
                                            <label for="card-element">
                                            Credit or debit card
                                            </label>
                                            <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                        
                                            <!-- Used to display form errors. -->
                                            <div id="card-errors" role="alert"></div>
                                        </div>
                                        <button>Submit Payment</button>
                                    </form>
                                    <script>
                                        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
var elements = stripe.elements();
                                    </script>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h3 style="font-size: 15px">LIÊN KẾT NHANH</h3>
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay8.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay1.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay2.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay3.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay4.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay5.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay6.jpg" alt="">
                                    <img style="margin-top: 20px" src="/storage/app/public/files/pay7.jpg" alt="">
                                    <div style="border-top: 1px solid black;margin-top:20px">
                                        <h3 style="font-size: 15px;margin-top:20px">VIDEO</h3>
                                        <iframe style="margin-top: 20px" height="200" src="https://www.youtube.com/embed/dCixfrcHw7I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                                        gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="border-top: 1px solid black;margin-top:20px">
                                        <h3 style="font-size: 15px;margin-top:20px">BÀI VIẾT GẦN ĐÂY</h3>
                                        <div style="margin-top:10px" class="row">
                                            <div class="col-4">
                                            <img style="height: 60px" src="/storage/app/public/files/pay8.jpg" alt="">
                                            </div>
                                            <div class="col-8">
                                                <p style="font-size: 15px">Thông tin liên quan đến việc làm thủ tục tạm trú.</p>
                                                <p style="font-size: 10px;color:black">25/12/1999</p>
                                            </div>
                                        </div>
                                        <div style="margin-top:10px" class="row">
                                            <div style="margin-top: 20px" class="col-4">
                                                <img style="height: 60px" src="/storage/app/public/files/pay1.jpg" alt="">
                                            </div>
                                            <div style="margin-top: 20px" class="col-8">
                                                <p style="font-size: 15px">Thông tin liên quan đến việc làm thủ tục tạm trú.</p>
                                                <p style="font-size: 10px;color:black">25/12/1999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END TOP CAMPAIGN-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <script>
        // Create a Stripe client.
        var stripe = Stripe(publishable_key);
        
        // Create an instance of Elements.
        var elements = stripe.elements();
        
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        
        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});
        
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
        
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
        
            // Submit the form
            form.submit();
        }
    </script>
@endsection