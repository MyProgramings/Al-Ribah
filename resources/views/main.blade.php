@extends('layouts.index')

@section('content')
    <header>
        @include('parts.news')
    </header>
    <main>
        @include('parts.section_last_news')

        <livewire:post-component />

        @include('parts.section_most_read')

        @include('parts.structure')
        {{-- <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-db30b92 elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="db30b92" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5f1b3d5 ob-is-e3" data-id="5f1b3d5" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-0f04591 elementor-widget-divider--view-line ob-has-background-overlay elementor-widget elementor-widget-divider" data-id="0f04591" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-fe75c15 ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="fe75c15" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">الهيكل الاداري</h2>
                            </div>
                        </div>
                        <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-2d78f92 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d78f92" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-e94cbe4 ob-is-e3" data-id="e94cbe4" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2b72bee elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="2b72bee" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementordss">
                                                <h2 class="elementor-heading-title elementor-size-default">الجمعية العمومية
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-65be8ae ob-is-e3" data-id="65be8ae" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-220c0db elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="220c0db" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">مجلس الادارة</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-1803758 ob-is-e3" data-id="1803758" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-bf9fec9 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="bf9fec9" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">الرئيس</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-429b0d8 ob-is-e3" data-id="429b0d8" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ad1b47a elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="ad1b47a" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">أمانة المجلس</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-8540c28 ob-is-e3" data-id="8540c28" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-46f6995 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="46f6995" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">اللجان</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-e56a564 ob-is-e3" data-id="e56a564" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-870cf1c elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading" data-id="870cf1c" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">المستشارين</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-8434ac6 ob-is-e3" data-id="8434ac6" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cf5e31c ob-has-background-overlay elementor-widget elementor-widget-image" data-id="cf5e31c" data-element_type="widget" data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="1024" height="4"
                                                    src="https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-1024x4.png"
                                                    class="attachment-large size-large" alt=""
                                                    srcset="https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-1024x4.png 1024w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-300x1.png 300w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-768x3.png 768w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-930x5.png 930w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8.png 1428w"
                                                    sizes="(max-width: 1024px) 100vw, 1024px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-0a648ad ob-is-e3"
                                    data-id="0a648ad" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-32409bc elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="32409bc" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">المدير التنفيذي
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-bb2444b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="bb2444b" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-9b7f83b ob-is-e3"
                                    data-id="9b7f83b" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-f8a9f88 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="f8a9f88" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="5" height="706"
                                                    src="https://cacs.org.sa/wp-content/uploads/2022/04/Path-925.png"
                                                    class="attachment-large size-large" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-36737a7 ob-is-e3"
                                    data-id="36737a7" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-1030816 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="1030816" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="1024" height="4"
                                                    src="https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-1024x4.png"
                                                    class="attachment-large size-large" alt=""
                                                    srcset="https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-1024x4.png 1024w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-300x1.png 300w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-768x3.png 768w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8-930x5.png 930w, https://cacs.org.sa/wp-content/uploads/2022/04/Line-8.png 1428w"
                                                    sizes="(max-width: 1024px) 100vw, 1024px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-084d3ce ob-is-e3"
                                    data-id="084d3ce" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5a10965 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="5a10965" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">المالية
                                                    والادارية</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2c540b2 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="2c540b2" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">المشتريات</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7bf0301 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="7bf0301" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">الموارد البشرية
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5c80e21 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="5c80e21" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">القانونية</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9f0d26b elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="9f0d26b" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">تقنية المعلومات
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4015746 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="4015746" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">الأبحاث والتطوير
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-404d266 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="404d266" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="5" height="552"
                                                    src="https://cacs.org.sa/wp-content/uploads/2022/04/Path-926.png"
                                                    class="attachment-large size-large" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-aa76e3f ob-is-e3"
                                    data-id="aa76e3f" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4ce3cb7 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="4ce3cb7" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">العلاقات العامة
                                                    والاعلام</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-40b8a59 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="40b8a59" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">التواصل</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-cbb12b9 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="cbb12b9" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">الاعلام</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ff924a0 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="ff924a0" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">العلاقات العامة
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-348a219 ob-has-background-overlay elementor-widget elementor-widget-image"
                                            data-id="348a219" data-element_type="widget"
                                            data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="5" height="552"
                                                    src="https://cacs.org.sa/wp-content/uploads/2022/04/Path-926.png"
                                                    class="attachment-large size-large" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-ffb6f03 ob-is-e3"
                                    data-id="ffb6f03" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-8c4b667 elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="8c4b667" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">الاستثمار
                                                    التعاوني</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4a59087 ob-is-e3"
                                    data-id="4a59087" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b7880ae elementor-widget__width-initial ob-harakiri-inherit ob-has-background-overlay elementor-widget elementor-widget-heading"
                                            data-id="b7880ae" data-element_type="widget"
                                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_poopart_use&quot;:&quot;yes&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">التسويق</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section> --}}
        @include('parts.section_opinions')

        @include('parts.section_videos')

    </main>
@endsection
