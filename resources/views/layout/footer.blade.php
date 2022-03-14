<div class="cotainer mt-4">
  <div class="row" style="position:relative">
    <img src="https://sabaa.org/img/entasib.jpg" class="img-fluid" />
    <div style="position:absolute;top:50px;left:60%;width:300px">
      <h2 style="color:white;text-align-last: center;">{{ __('body.subnit') }}</h2>
      <button class="btn btn-primary btn-color w-100">{{ __('body.subnit') }}</button>
    </div>
  </div>
</div>


<footer id="Footer">
    <div id="FooterContent">
        <div id="FooterSection1" >
            <div class="Title">{{ __('footer.Contact') }}</div>
            <div class="Text" style="line-height:100%">{{ __('footer.address1') }}<br>
                {{ __('footer.address2') }}<br>
                {{ __('footer.address3') }}<br>
                <br>
                961-78-836142<br>
                <br>
                info@sabaa.org
            </div>
            <div class="sep"></div>
            <div class="sep"></div>
            <div class="sep"></div>
            <div class="Title3">{{ __('footer.follow') }}</div>
            <a href="https://twitter.com/Sabaaofficial7?t=f_d0_2NqMlVzh8JVhC_fgw&amp;s=09" class="FooterSection1SocialTwitter" target="_blank"></a>
            <a href="https://www.facebook.com/sabaapolitics/" class="FooterSection1SocialFacebook" target="_blank"></a>
        </div>
        <div id="FooterSection2" >
            <div class="Title">{{ __('footer.office') }}</div>
            <iframe width="100%" height="300" title="location"  style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC8ZgZcdURbLWpk-Mj-Dhk8-igc0Rw3YSg&amp;q=33.901763,35.527980" allowfullscreen="">
            </iframe>
        </div>
        <div id="FooterSection3" >
            <div class="Title">{{ __('footer.Suggestions') }}</div>
            <form method="POST">
                <input type="text" name="name" required="required" class="InputText" placeholder="{{ __('footer.Iname') }}">
                <input type="email" name="email" required="required" class="InputText" placeholder="{{ __('footer.Iemail') }}">
                <div class="InputDescription">{{ __('footer.note') }}</div>
                <input type="text" name="reason" required="required" class="InputText" placeholder="{{ __('footer.Isubject') }}">
                <textarea rows="5" class="InputTextArea" name="message" required="required" placeholder="{{ __('footer.Isuggestion') }}"></textarea>
                <div class="sep"></div>
                <input type="submit" value="{{ __('footer.Bsend') }}" class="InputBtn2">
            </form>
        </div>
    </div>
    <div id="FooterContent2" class="Text">{{ __('footer.copy') }}</div>
</footer>
