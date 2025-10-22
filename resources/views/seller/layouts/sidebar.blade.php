                    <div class="sidebar_menu">
                        <ul>
                            <li>
                                <a href="{{ url("/seller/user-profile") }}" class="{{ request()->is('seller/user-profile') ? 'active' : '' }}">
                                    <img src="{{ asset_url('images/icons/profile.svg') }}" class="" alt="">
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url("/seller/my-listing") }}" class="{{ request()->is('seller/my-listing') ? 'active' : '' }}">
                                    <img src="{{ asset_url('images/icons/review_listing.svg') }}" class="" alt="">
                                    <span>My Listings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url("/seller/message") }}" class="{{ request()->is('seller/message') ? 'active' : '' }}">
                                    <img src="{{ asset_url('images/icons/msg.svg') }}" class="" alt="">
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url("/seller/saved-listing") }}" class="{{ request()->is('seller/saved-listing') ? 'active' : '' }}">
                                    <img src="{{ asset_url('images/icons/bookmark.svg') }}" class="" alt="">
                                    <span>Saved Listings</span>
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="pt-0">
                            <li>
                                <a href="{{ url("/seller/settings") }}" class="{{ request()->is('seller/settings') ? 'active' : '' }}">
                                    <img src="{{ asset_url('images/icons/settings.svg') }}" class="" alt="">
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="">
                                    <img src="{{ asset_url('images/icons/logout.svg') }}" class="" alt="">
                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>

