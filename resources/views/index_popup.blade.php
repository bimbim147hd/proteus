 @extends('index')
 @section('popup')
 <script>
     fbq('track', 'Lead');
 </script>
     <!-- Pop Up -->
            <div class="pop-up active animated fadeIn">
                <div class="pop-up-inner">
                    <div class="pop-body text-center">
                        <a href="" class="close-pop"><img src="assets/images/close.png" alt="" /></a>
                        <div class="logo">
                            <a href="{{asset('/')}}" title=""><img src="assets/images/logo-black.png" alt=""/></a>
                        </div>
                        <p>THANK YOU FOR JOINING OUR WAITLIST</p>
                        <h2>Get additional packs for free!</h2>
                        <h3>Invite 3 friends to the waiting list and earn your first month for free.</h3>
                        <div class="share-btns">
                            <a href="#"><i class="fa fa-link"></i>SHARE THIS LINK</a>
                            <a href="http://www.facebook.com/sharer.php?u={{url('/')}}?rel={{$referral_code}}" target="_blank"><i class="fa fa-facebook-f"></i>SHARE ON FACEBOOK</a>
                        </div>
                        <div id="group-share">
                            <span id="p1" class="link">{{url('/')}}?rel={{$referral_code}}</span>
                            <button onclick="copyToClipboard('#p1')">Copy</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Pop Up -->
@endsection
