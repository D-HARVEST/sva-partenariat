<div class="hide" style="display: none;">
    <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
    </button>
    <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
            <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                Settings
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body h-n80 simplebar-scrollable-y simplebar-scrollable-x" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: -16px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: scroll;">
                            <div class="simplebar-content" style="padding: 16px;">
                                <h6 class="fw-semibold fs-4 mb-2">Theme</h6>
                                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                                    <input type="radio" class="btn-check light-layout" name="theme-layout"
                                        id="light-layout" autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="light-layout"><i
                                            class="icon ti ti-brightness-up fs-7 me-2"></i>Light</label>
                                    <input type="radio" class="btn-check dark-layout" name="theme-layout"
                                        id="dark-layout" autocomplete="off" checked>
                                    <label class="btn p-9 btn-outline-primary" for="dark-layout"><i
                                            class="icon ti ti-moon fs-7 me-2"></i>Dark</label>
                                </div>
                                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                                    <input type="radio" class="btn-check" name="direction-l" id="ltr-layout"
                                        autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="ltr-layout"><i
                                            class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR</label>
                                    <input type="radio" class="btn-check" name="direction-l" id="rtl-layout"
                                        autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="rtl-layout"><i
                                            class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL</label>
                                </div>
                                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>
                                <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete"
                                    role="group">
                                    <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                                        autocomplete="off">
                                    <label
                                        class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                                        onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
                                        <div
                                            class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                        </div>
                                    </label>
                                    <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                                        autocomplete="off">
                                    <label
                                        class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                                        onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
                                        <div
                                            class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                        </div>
                                    </label>
                                    <input type="radio" class="btn-check" name="color-theme-layout"
                                        id="Purple_Theme" autocomplete="off">
                                    <label
                                        class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                                        onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="PURPLE_THEME">
                                        <div
                                            class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                        </div>
                                    </label>
                                    <input type="radio" class="btn-check" name="color-theme-layout"
                                        id="green-theme-layout" autocomplete="off">
                                    <label
                                        class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                                        onclick="handleColorTheme('Green_Theme')" for="green-theme-layout"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                                        <div
                                            class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                        </div>
                                    </label>
                                    <input type="radio" class="btn-check" name="color-theme-layout"
                                        id="cyan-theme-layout" autocomplete="off">
                                    <label
                                        class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                                        onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                                        <div
                                            class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                        </div>
                                    </label>
                                    <input type="radio" class="btn-check" name="color-theme-layout"
                                        id="orange-theme-layout" autocomplete="off">
                                    <label
                                        class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                                        onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="ORANGE_THEME">
                                        <div
                                            class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                        </div>
                                    </label>
                                </div>
                                <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                                    <div>
                                        <input type="radio" class="btn-check" name="page-layout"
                                            id="vertical-layout" autocomplete="off">
                                        <label class="btn p-9 btn-outline-primary" for="vertical-layout"><i
                                                class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical</label>
                                    </div>
                                    <div>
                                        <input type="radio" class="btn-check" name="page-layout"
                                            id="horizontal-layout" autocomplete="off">
                                        <label class="btn p-9 btn-outline-primary" for="horizontal-layout"><i
                                                class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal</label>
                                    </div>
                                </div>
                                <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>
                                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                                    <input type="radio" class="btn-check" name="layout" id="boxed-layout"
                                        autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="boxed-layout"><i
                                            class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed</label>
                                    <input type="radio" class="btn-check" name="layout" id="full-layout"
                                        autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="full-layout"><i
                                            class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full</label>
                                </div>
                                <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                                    <a href="javascript:void(0)" class="fullsidebar">
                                        <input type="radio" class="btn-check" name="sidebar-type"
                                            id="full-sidebar" autocomplete="off">
                                        <label class="btn p-9 btn-outline-primary" for="full-sidebar"><i
                                                class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full</label>
                                    </a>
                                    <div>
                                        <input type="radio" class="btn-check " name="sidebar-type"
                                            id="mini-sidebar" autocomplete="off">
                                        <label class="btn p-9 btn-outline-primary" for="mini-sidebar"><i
                                                class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse</label>
                                    </div>
                                </div>
                                <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>
                                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                                    <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                                        autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="card-with-border"><i
                                            class="icon ti ti-border-outer fs-7 me-2"></i>Border</label>
                                    <input type="radio" class="btn-check" name="card-layout"
                                        id="card-without-border" autocomplete="off">
                                    <label class="btn p-9 btn-outline-primary" for="card-without-border"><i
                                            class="icon ti ti-border-none fs-7 me-2"></i>Shadow</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 303px; height: 1135px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="width: 299px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 331px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
</div>
