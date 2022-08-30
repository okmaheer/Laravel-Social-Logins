<div class="row" style="padding-bottom: 10px; display: flex !important;">
    <div style="width: 25%;align-self: center!important;">
        <img src="{{ asset(session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->logo) }}" alt="logo-small" width="128px">
    </div>
    <div style="width: 15%;"></div>
    <div style="width: 20%;align-self: center!important;">
        <div class="pl-3" style=" border-left: 1px solid #a8a8b1;">
            <i class="mdi mdi-web" style="font-size: 24px;color: #a8a8b1;"></i>
            <p class="text-muted mb-0">{!! session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->website ?? '&nbsp;' !!}</p>
            <p class="text-muted mb-0">{!! session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->email ?? '&nbsp;' !!}</p>
        </div>
    </div>
    <div style="width: 20%;align-self: center!important;">
        <div class="pl-3" style=" border-left: 1px solid #a8a8b1;">
            <i class="mdi mdi-phone" style="font-size: 24px;color: #a8a8b1;"></i>
            <p class="text-muted mb-0">{{ session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->mobile_1 }}</p>
            <p class="text-muted mb-0">{!! session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->phone_1 ?? '&nbsp;' !!}</p>
        </div>
    </div>
    <div style="width: 20%;align-self: center!important;">
        <div class="pl-3" style=" border-left: 1px solid #a8a8b1;">
            <i class="mdi mdi-map-marker" style="font-size: 24px;color: #a8a8b1;"></i>
            <p class="text-muted mb-0">{!! session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->address_1 !!}<br>{!! session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->address_2 ?? '&nbsp;' !!}</p>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 0.5rem; margin-bottom: 1rem; padding: 0.5rem; background-color: #2f394e !important; color: #FFFFFF;">
    <div style="width: 100%; text-align: center;">
        <h3 style="margin: 0px !important; padding: 0px !important;"><b>{{ $page_title }}</b></h3>
    </div>
</div>
