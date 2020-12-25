<footer class="footer">
    <div class="float-left"> <span class="text-muted">©2020 Clean As New Gulf Coast LLC.<br>
            @if(isset($siteSetting) && $siteSetting != null)
            <span style="display: inline-flex;">{!! $siteSetting->footer_txt !!}</span> · <a href="/privacy-policy">{{__('Privacy Policy')}}</a> · <a href="/terms-of-use">{{__('Terms of Use')}}</a>
            @else
            Yes We Can!, Clean As New and Clean As New Powered By <a href="https://techsonic.com/" target="_blank" rel="noopener">Tech Sonic</a> are registered trademarks of Clean As New Gulf Coast LLC · <a href="/privacy-policy">{{__('Privacy Policy')}}</a> · <a href="/terms-of-use">{{__('Terms of Use')}}</a>
            @endif
        </span>
    </div>
    <div class="float-right"> <span class="text-muted"> {{__('Follow Us On:')}} <a rel="noopener noreferrer" class="facebookBtn socialBtn" href="https://www.facebook.com/cangc01" target="_blank">&nbsp;</a> <a rel="noopener noreferrer" class="linkedinBtn socialBtn" target="_blank" href="https://www.linkedin.com/company/cleanasnew01/">&nbsp;</a> </span> </div>
</footer>