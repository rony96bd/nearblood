<div class="sidebar {{ sidebarVariation()['selector'] }} {{ sidebarVariation()['sidebar'] }} {{ @sidebarVariation()['overlay'] }} {{ @sidebarVariation()['opacity'] }}"
     {{-- data-background="{{getImage('assets/donor/images/sidebar/2.jpg','400x800')}}"> --}}
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{route('donor.dashboard')}}" class="sidebar__main-logo"><img
                    src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="@lang('image')"></a>
            <a href="{{route('donor.dashboard')}}" class="sidebar__logo-shape"><img
                    src="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}" alt="@lang('image')"></a>
            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item {{menuActive('donor.dashboard')}}">
                    <a href="{{route('donor.dashboard')}}" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title">@lang('Dashboard')</span>
                    </a>
                </li>


                {{-- <li class="sidebar-menu-item  {{menuActive('donor.city.index')}}">
                    <a href="{{route('donor.city.index')}}" class="nav-link"
                       data-default-url="{{ route('donor.city.index') }}">
                        <i class="menu-icon las la-city"></i>
                        <span class="menu-title">@lang('Manage City') </span>
                    </a>
                </li> --}}


                 {{-- <li class="sidebar-menu-item  {{menuActive('donor.location.index')}}">
                    <a href="{{route('donor.location.index')}}" class="nav-link"
                       data-default-url="{{ route('donor.location.index') }}">
                        <i class="menu-icon las la-location-arrow"></i>
                        <span class="menu-title">@lang('Manage Location') </span>
                    </a>
                </li> --}}


                {{-- <li class="sidebar-menu-item  {{menuActive('donor.blood.index')}}">
                    <a href="{{route('donor.blood.index')}}" class="nav-link"
                       data-default-url="{{ route('donor.blood.index') }}">
                        <i class="menu-icon las la-syringe"></i>
                        <span class="menu-title">@lang('Blood Group') </span>
                    </a>
                </li> --}}


                 {{-- <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('donor.donor*',3)}}">
                        <i class="menu-icon las la-user"></i>
                        <span class="menu-title">@lang('Manage Donor') </span>
                        @if(0 < $pending_donor_count)
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('donor.donor*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('donor.donor.index')}} ">
                                <a href="{{route('donor.donor.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All')</span>
                                </a>
                            </li> --}}
                            {{-- <li class="sidebar-menu-item {{menuActive('donor.donor.pending')}} ">
                                <a href="{{route('donor.donor.pending')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Pending')</span>
                                    @if($pending_donor_count)
                                        <span
                                            class="menu-badge pill bg--primary ml-auto">{{$pending_donor_count}}</span>
                                    @endif
                                </a>
                            </li> --}}

                             {{-- <li class="sidebar-menu-item {{menuActive('donor.donor.approved')}} ">
                                <a href="{{route('donor.donor.approved')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Approved')</span>
                                </a>
                            </li>

                             <li class="sidebar-menu-item {{menuActive('donor.donor.banned')}} ">
                                <a href="{{route('donor.donor.banned')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Banned')</span>
                                </a>
                            </li> --}}

                        {{-- </ul>
                    </div>
                </li> --}}

                {{-- <li class="sidebar-menu-item  {{menuActive('donor.ads.*')}}">
                    <a href="{{route('donor.ads.index')}}" class="nav-link"
                       data-default-url="{{ route('donor.ads.index') }}">
                        <i class="menu-icon lab la-adversal"></i>
                        <span class="menu-title">@lang('Advertisement') </span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('donor.ticket*',3)}}">
                        <i class="menu-icon la la-ticket"></i>
                        <span class="menu-title">@lang('Support Ticket') </span>
                        @if(0 < $pending_ticket_count)
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('donor.ticket*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('donor.ticket')}} ">
                                <a href="{{route('donor.ticket')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All Ticket')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('donor.ticket.pending')}} ">
                                <a href="{{route('donor.ticket.pending')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Pending Ticket')</span>
                                    @if($pending_ticket_count)
                                        <span
                                            class="menu-badge pill bg--primary ml-auto">{{$pending_ticket_count}}</span>
                                    @endif
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('donor.ticket.closed')}} ">
                                <a href="{{route('donor.ticket.closed')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Closed Ticket')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('donor.ticket.answered')}} ">
                                <a href="{{route('donor.ticket.answered')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Answered Ticket')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}


                {{-- <li class="sidebar-menu-item  {{menuActive('donor.subscriber.index')}}">
                    <a href="{{route('donor.subscriber.index')}}" class="nav-link"
                       data-default-url="{{ route('donor.subscriber.index') }}">
                        <i class="menu-icon las la-thumbs-up"></i>
                        <span class="menu-title">@lang('Subscribers') </span>
                    </a>
                </li> --}}


                {{-- <li class="sidebar__menu-header">@lang('Settings')</li>

                <li class="sidebar-menu-item {{menuActive('donor.setting.index')}}">
                    <a href="{{route('donor.setting.index')}}" class="nav-link">
                        <i class="menu-icon las la-life-ring"></i>
                        <span class="menu-title">@lang('General Setting')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('donor.setting.logo.icon')}}">
                    <a href="{{route('donor.setting.logo.icon')}}" class="nav-link">
                        <i class="menu-icon las la-images"></i>
                        <span class="menu-title">@lang('Logo & Favicon')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('donor.extensions.index')}}">
                    <a href="{{route('donor.extensions.index')}}" class="nav-link">
                        <i class="menu-icon las la-cogs"></i>
                        <span class="menu-title">@lang('Extensions')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item  {{menuActive(['donor.language.manage','donor.language.key'])}}">
                    <a href="{{route('donor.language.manage')}}" class="nav-link"
                       data-default-url="{{ route('donor.language.manage') }}">
                        <i class="menu-icon las la-language"></i>
                        <span class="menu-title">@lang('Language') </span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('donor.seo')}}">
                    <a href="{{route('donor.seo')}}" class="nav-link">
                        <i class="menu-icon las la-globe"></i>
                        <span class="menu-title">@lang('SEO Manager')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('donor.email.template*',3)}}">
                        <i class="menu-icon la la-envelope-o"></i>
                        <span class="menu-title">@lang('Email Manager')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('donor.email.template*',2)}} ">
                        <ul>

                            <li class="sidebar-menu-item {{menuActive('donor.email.template.global')}} ">
                                <a href="{{route('donor.email.template.global')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Global Template')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive(['donor.email.template.index','donor.email.template.edit'])}} ">
                                <a href="{{ route('donor.email.template.index') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Email Templates')</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('donor.email.template.setting')}} ">
                                <a href="{{route('donor.email.template.setting')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Email Configure')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('donor.sms.template*',3)}}">
                        <i class="menu-icon la la-mobile"></i>
                        <span class="menu-title">@lang('SMS Manager')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('donor.sms.template*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('donor.sms.template.global')}} ">
                                <a href="{{route('donor.sms.template.global')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Global Setting')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('donor.sms.templates.setting')}} ">
                                <a href="{{route('donor.sms.templates.setting')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('SMS Gateways')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive(['donor.sms.template.index','donor.sms.template.edit'])}} ">
                                <a href="{{ route('donor.sms.template.index') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('SMS Templates')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar__menu-header">@lang('Frontend Manager')</li>

                <li class="sidebar-menu-item {{menuActive('donor.frontend.templates')}}">
                    <a href="{{route('donor.frontend.templates')}}" class="nav-link ">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title">@lang('Manage Templates')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('donor.frontend.manage.pages')}}">
                    <a href="{{route('donor.frontend.manage.pages')}}" class="nav-link ">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title">@lang('Manage Pages')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('donor.frontend.sections*',3)}}">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title">@lang('Manage Section')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('donor.frontend.sections*',2)}} ">
                        <ul>
                            @php
                               $lastSegment =  collect(request()->segments())->last();
                            @endphp
                            @foreach(getPageSections(true) as $k => $secs)
                                @if($secs['builder'])
                                    <li class="sidebar-menu-item  @if($lastSegment == $k) active @endif ">
                                        <a href="{{ route('donor.frontend.sections',$k) }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">{{__($secs['name'])}}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach


                        </ul>
                    </div>
                </li>

                <li class="sidebar__menu-header">@lang('Extra')</li>


                <li class="sidebar-menu-item {{menuActive('donor.setting.cookie')}}">
                    <a href="{{route('donor.setting.cookie')}}" class="nav-link">
                        <i class="menu-icon las la-cookie-bite"></i>
                        <span class="menu-title">@lang('GDPR Cookie')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item  {{menuActive('donor.system.info')}}">
                    <a href="{{route('donor.system.info')}}" class="nav-link"
                       data-default-url="{{ route('donor.system.info') }}">
                        <i class="menu-icon las la-server"></i>
                        <span class="menu-title">@lang('System Information') </span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('donor.setting.custom.css')}}">
                    <a href="{{route('donor.setting.custom.css')}}" class="nav-link">
                        <i class="menu-icon lab la-css3-alt"></i>
                        <span class="menu-title">@lang('Custom CSS')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('donor.setting.optimize')}}">
                    <a href="{{route('donor.setting.optimize')}}" class="nav-link">
                        <i class="menu-icon las la-broom"></i>
                        <span class="menu-title">@lang('Clear Cache')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item  {{menuActive('donor.request.report')}}">
                    <a href="{{route('donor.request.report')}}" class="nav-link"
                       data-default-url="{{ route('donor.request.report') }}">
                        <i class="menu-icon las la-bug"></i>
                        <span class="menu-title">@lang('Report & Request') </span>
                    </a>
                </li>
            </ul>
            <div class="text-center mb-3 text-uppercase">
                <span class="text--primary">{{__(systemDetails()['name'])}}</span>
                <span class="text--success">@lang('V'){{systemDetails()['version']}} </span>
            </div>--}}
        </div>

    </div>
</div>
<!-- sidebar end -->
