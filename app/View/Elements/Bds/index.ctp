
<div class="smart_details">
    <div class="container">
        <div class="col-md-10 dropdown-buttons">
            <div class="col-md-4 dropdown-button">
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All Locations</option>
                        <option value="null">Business</option>
                        <option value="AX">First Class</option>
                        <option value="AX">Premium Economy</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 dropdown-button">
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All Property types</option>
                        <option value="null">House</option>
                        <option value="AX">Apartment</option>
                        <option value="AX">Premium Economy</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 dropdown-button">
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All contracts</option>
                        <option value="null">Sale</option>
                        <option value="AX">Rent</option>
                        <option value="AX">Sold</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-2 submit_button">
            <form>
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="content_top">
    <div class="container">
        <h4 class="m_3">Most Popular</h4>
        <div class="grid_1">

            <?php for($i=0; $i<4; $i++) {
                $apartmentInfo = isset($listApartment[$i]) ? $listApartment[$i] : [];
                if(!$apartmentInfo) {
                    break;
                }
                $picture = $apartmentInfo['picture'];
                $houseName = $apartmentInfo['name'];
            ?>
                <div class="col-md-3 box_1">
                    <a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>"><img src="<?php echo $picture;?>" class="img-responsive" alt=""/></a>
                    <div class="box_2">
                        <div class="special-wrap"><div class="hot_offer"><span class="m_11">Hot Offer</span></div><div class="forclosure"><span class="m_12">Special Offer</span></div></div>
                    </div>
                    <div class="box_3">
                        <h3><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>"><?php echo $houseName; ?></a></h3>
                        <div class="boxed_mini_details clearfix">
			      <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"> </i>
			      2</span>
			      <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			      2</span>
			      <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-bed"></i>
			      2</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
        <div class="content_bottom">
            <div class="col-md-2">
                <div class="widget">
                    <div class="title"><h3><i class="fa fa-meh-o men"> </i> For Sale</h3></div>
                    <ul class="real-widget"><li><a href="#">commercial(3)</a></li>
                        <li><a href="#">Housing(16)</a><ul>
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Summerhouse</a></li>
                                <li><a href="#">Villa</a></li></ul>
                    </ul></li>
                    </ul>
                </div>
                <div class="widget">
                    <div class="title"><h3><i class="fa fa-meh-o men"> </i> For Rent</h3></div>
                    <ul class="real-widget"><li><a href="#">commercial(3)</a></li>
                        <li><a href="#">Housing(16)</a><ul>
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Summerhouse</a></li>
                                <li><a href="#">Villa</a></li></ul>
                    </ul></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <div class="tab_grid">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Apartment</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Resort</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Summer house</span></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <ul class="tab_img tab_1">
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic1.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;650</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic2.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;450</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic3.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;220</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <ul class="tab_img">
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic4.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;650</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic5.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;450</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic6.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;500</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">

                            <ul class="tab_img">
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic4.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;650</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic5.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;450</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic6.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;500</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            <ul class="tab_img">
                                <li>
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic6.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;450</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="client_box1">
                                        <img src="<?php echo Router::url('/', true);?>img/pic6.jpg" class="img-responsive" alt=""/>
                                        <div class="box_type">$&nbsp;500</div>
                                        <h3 class="m_1"><a href="<?php echo $this->Html->url(array('controller' => 'Bds', 'action' => 'single')); ?>">Dolor Sit</a></h3>
                                        <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                                        </div>
                                    </div>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blog_list2">
                    <h3>Our Agents</h3>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="<?php echo Router::url('/', true);?>img/pic12.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><a href="#">Adipisicing</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">20-1257-2587</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="<?php echo Router::url('/', true);?>img/pic13.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><a href="#">Incididunt</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">20-1257-2587</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="blog-list3">
                        <li class="blog-list3-img"><img src="<?php echo Router::url('/', true);?>img/pic7.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><a href="#">Hampden-Sydney</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">20-1257-2587</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>

