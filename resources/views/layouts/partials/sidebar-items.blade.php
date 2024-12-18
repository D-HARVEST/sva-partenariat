{{-- <li class="sidebar-item">
    <a class="sidebar-link primary-hover-bg" href="{{ 'home' }}" aria-expanded="false">
        <iconify-icon icon="iconamoon:home" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">Accueil</span>
    </a>
</li> --}}
{{-- <li class="sidebar-item">
    <a class="sidebar-link primary-hover-bg" href="" aria-expanded="false">
        <iconify-icon icon="iconamoon:home" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">Accueil</span>
    </a>
</li> --}}


<li class="sidebar-item">
    <a class="sidebar-link primary-hover-bg" href="{{ route('dashboard') }}" aria-expanded="false">
        {{-- <iconify-icon icon="solar:chart-line-duotone" class="fs-6 aside-icon"></iconify-icon> --}}
        <iconify-icon icon="solar:atom-line-duotone" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">Dashboard</span>
    </a>
</li>

@role('Super-admin')
<li class="sidebar-item">
    <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
        <iconify-icon icon="solar:layers-line-duotone" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">Données</span>
    </a>

    <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
            <a class="sidebar-link primary-hover-bg" href="{{ route('recharge-stocks.index') }}" aria-expanded="false">
                <iconify-icon icon="mdi:database" class="fs-6 aside-icon"></iconify-icon>
                <span class="hide-menu ps-1">Stocks de data</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link primary-hover-bg" href="{{ route('data-packages.index') }}" aria-expanded="false">
                <iconify-icon icon="mdi:cloud-outline" class="fs-6 aside-icon"></iconify-icon>
                <span class="hide-menu ps-1">Forfaits de data</span>
            </a>
        </li>
    </ul>
</li>
@endrole

@role('Super-admin')
<li class="sidebar-item">
    <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
        <iconify-icon icon="mdi:cog" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">Traitement</span>
    </a>

    <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
            <a class="sidebar-link primary-hover-bg" href="{{ route('rapport') }}" aria-expanded="flse">
                <iconify-icon icon="mdi:cash-register" class="fs-6 aside-icon"></iconify-icon>
                <span class="hide-menu ps-1">Rapport de vente</span>
            </a>
        </li>
    </ul>
</li>
@endrole


{{-- <li class="sidebar-item">
    <a class="sidebar-link primary-hover-bg" href="{{ route('users.index') }}" aria-expanded="false">
        <iconify-icon icon="icomoon-free:users" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">utilisateurs</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link primary-hover-bg" href="{{ route('roles.index') }}" aria-expanded="false">
        <iconify-icon icon="hugeicons:hierarchy-square-02" class="fs-6 aside-icon"></iconify-icon>
        <span class="hide-menu ps-1">Roles</span>
    </a>
</li> --}}





@role('Super-admin')
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
            <iconify-icon icon="mdi:shield-account" class="fs-6 aside-icon"></iconify-icon>
            <span class="hide-menu ps-1">Users & Roles</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
            @haspermission('gerer users')
                <li class="sidebar-item">
                    <a class="sidebar-link primary-hover-bg" href="{{ route('users.index') }}" aria-expanded="false">
                        <iconify-icon icon="icomoon-free:users" class="fs-6 aside-icon"></iconify-icon>
                        <span class="hide-menu ps-1">utilisateurs</span>
                    </a>
                </li>
            @endhaspermission
            @haspermission('gerer roles')
                <li class="sidebar-item">
                    <a class="sidebar-link primary-hover-bg" href="{{ route('roles.index') }}" aria-expanded="false">
                        <iconify-icon icon="hugeicons:hierarchy-square-02" class="fs-6 aside-icon"></iconify-icon>
                        <span class="hide-menu ps-1">Roles</span>
                    </a>
                </li>
            @endhaspermission

        </ul>
    </li>
@endrole
