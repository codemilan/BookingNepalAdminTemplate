<?php require_once('header.php'); ?>

<section id="wrapper">
    <?php require_once('sidebar.php'); ?>

    <div class="content">
        <div class="title">
            <i class="fa fa-plane"></i> Domestic Flight
            <span>Get the cheapest flight deals</span>
        </div>
        <!-- Flight Search Box -->
        <div class="box">
            <div class="flight-search">
                <form action="">
                    <div class="colFull">
                        <div class="radiobox inline">
                            <input type="radio" name="flighttype" value="" id="ft1" checked="checked">
                            <label for="ft1">Return</label>
                        </div>
                        <div class="radiobox inline">
                            <input type="radio" name="flighttype" value="" id="ft2">
                            <label for="ft2">One Way</label>
                        </div>
                    </div>
                    <div class="col">
                        <label>From</label>
                        <select class="airport-search" name="from">
                            <option selected disabled>Country, city or airport</option>
                            <option value="">Nepalgunj Airport, Nepal - KEP</option>
                            <option value="">Surkhet Airport, Nepal - SKH</option>
                            <option value="">Tribhuvan International Airport, Nepal - KTM</option>
                            <option value="">Pokhara Airport, Nepal - PKR</option>
                            <option value="">Lukla Airport, Nepal - LUA</option>
                            <option value="">Meghauli Airport, Nepal - MEY</option>
                            <option value="">Biratnagar Airport, Nepal - BIR</option>
                            <option value="">Bhairahawa Airport, Nepal - BWA</option>
                            <option value="">Lamidanda Airport, Nepal - LDN</option>
                            <option value="">Rumjatar Airport, Nepal - RUM</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>To</label>
                        <select class="airport-search" name="from">
                            <option selected disabled>Country, city or airport</option>
                            <option value="">Nepalgunj Airport, Nepal - KEP</option>
                            <option value="">Surkhet Airport, Nepal - SKH</option>
                            <option value="">Tribhuvan International Airport, Nepal - KTM</option>
                            <option value="">Pokhara Airport, Nepal - PKR</option>
                            <option value="">Lukla Airport, Nepal - LUA</option>
                            <option value="">Meghauli Airport, Nepal - MEY</option>
                            <option value="">Biratnagar Airport, Nepal - BIR</option>
                            <option value="">Bhairahawa Airport, Nepal - BWA</option>
                            <option value="">Lamidanda Airport, Nepal - LDN</option>
                            <option value="">Rumjatar Airport, Nepal - RUM</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Depart</label>
                        <input type="text" data-toggle="datepicker" name="depart">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="col">
                        <label>Return</label>
                        <input type="text" data-toggle="datepicker" name="return">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="col">
                        <label>Travellers &amp; Class</label>
                        <span class="btn_opt">1 Traveller(s), Economy</span>
                        <div id="popup_opt" class="popup_opt">
                            <ul>
                                <li class="number">
                                    <button type="button" id="sub1" class="sub_adult"><i class="fa fa-minus"></i></button>
                                    <input type="text" id="1" value="1" disabled>
                                    <button type="button" id="add1" class="add_adult"><i class="fa fa-plus"></i></button>
                                    <div>Adult</div>
                                </li>
                                <li class="number">
                                    <button type="button" id="sub2" class="sub_child"><i class="fa fa-minus"></i></button>
                                    <input type="text" id="2" value="0" disabled>
                                    <button type="button" id="add2" class="add_child"><i class="fa fa-plus"></i></button>
                                    <div>Child <small>2-12 Years</small></div>
                                </li>
                                <li class="number">
                                    <button type="button" id="sub3" class="sub_infant"><i class="fa fa-minus"></i></button>
                                    <input type="text" id="3" value="0" disabled>
                                    <button type="button" id="add3" class="add_infant"><i class="fa fa-plus"></i></button>
                                    <div>Infant <small>Below 2 Years</small></div>
                                </li>
                                <li>
                                    <div class="radiobox">
                                        <input type="radio" name="class" value="" id="rb1" checked="checked">
                                        <label for="rb1">Economy</label>
                                    </div>
                                    <div class="radiobox">
                                        <input type="radio" name="class" value="" id="rb2">
                                        <label for="rb2">Premium Economy</label>
                                    </div>
                                    <div class="radiobox">
                                        <input type="radio" name="class" value="" id="rb3">
                                        <label for="rb3">Business</label>
                                    </div>
                                    <div class="radiobox">
                                        <input type="radio" name="class" value="" id="rb4">
                                        <label for="rb4">First Class</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!--End-->
        
        <div class="flight-result">
            <!-- Search Result Box -->
            <div class="block">
                <div class="topRow">
                    <div class="icon"><img src="images/airlines/qatarairways.png" width="100" height="100" alt=""></div>
                    <div class="name">Qatar Airways</div>
                    <div class="price">
                       <span>NRP. 76,300</span>
                        <a href="#" title="Book Now">Book Now</a>
                    </div>
                </div>
                <div class="midRow">
                    <div class="colFull">
                        <h6>Fri, 15 Dec | Kathmandu to Savannah</h6>
                        <ul>
                            <li class="first">KTM <strong>20:50</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="twostop">
                                    <div class="stop">DOH</div>
                                    <div class="stop">JFK</div>
                                </div>
                                <div class="time">26h 37m | 2-stop</div>
                            </li>
                            <li class="third">SAV <strong>12:42</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="botRow">
                    <ul>
                        <li>Refundable</li>
                        <li><a href="#" title="">2 Pcs baggage</a></li>
                    </ul> 
                </div>
            </div>
            
            <!-- Search Result Box -->
            <div class="block">
                <div class="topRow">
                    <div class="icon"><img src="images/airlines/americanairlines.png" width="100" height="100" alt=""></div>
                    <div class="name">American Airlines</div>
                    <div class="price">
                       <span>NRP. 135,000</span>
                        <a href="#" title="Book Now">Book Now</a>
                    </div>
                </div>
                <div class="midRow">
                    <div class="colLeft">
                        <h6>Sun, 10 Dec | Kathmandu to Savannah</h6>
                        <ul>
                            <li class="first">KTM <strong>20:50</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="twostop">
                                    <div class="stop">DOH</div>
                                    <div class="stop">JFK</div>
                                </div>
                                <div class="time">31h 1m | 2-stop</div>
                            </li>
                            <li class="third">SAV <strong>17:06</strong></li>
                        </ul>
                    </div>
                    <div class="colRight">
                        <h6>Tue, 09 Jan | Savannah to Kathmandu</h6>
                        <ul>
                            <li class="first">SAV <strong>17:45</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="twostop">
                                    <div class="stop">DOH</div>
                                    <div class="stop">JFK</div>
                                </div>
                                <div class="time">35h 10m | 2-stop</div>
                            </li>
                            <li class="third">KTM <strong>15:40</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="botRow">
                    <ul>
                        <li>Non-Refundable</li>
                        <li><a href="#" title="">2 Pcs baggage</a></li>
                    </ul> 
                </div>
            </div>
            
            <!-- Search Result Box -->
            <div class="block">
                <div class="topRow">
                    <div class="icon"><img src="images/airlines/chinasouthern.png" width="100" height="100" alt=""></div>
                    <div class="name"> China Southern</div>
                    <div class="price">
                       <span>NRP. 86,600</span>
                        <a href="#" title="Book Now">Book Now</a>
                    </div>
                </div>
                <div class="midRow">
                    <div class="colLeft">
                        <h6>Thu, 21 Dec | Kathmandu to Melbourne</h6>
                        <ul>
                            <li class="first">KTM <strong>23:15</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="onestop">
                                    <div class="stop">CAN</div>
                                </div>
                                <div class="time">17h 55m | 1-stop</div>
                            </li>
                            <li class="third">MEL <strong>21:30</strong></li>
                        </ul>
                    </div>
                    <div class="colRight">
                        <h6>Tue, 09 Jan | Savannah to Kathmandu</h6>
                        <ul>
                            <li class="first">MEL <strong> 23:30</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="onestop">
                                    <div class="stop">CAN</div>
                                </div>
                                <div class="time">17h 55m | 1-stop</div>
                            </li>
                            <li class="third">KTM <strong>12:10</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="botRow">
                    <ul>
                        <li>Non-Refundable</li>
                        <li><a href="#" title="">2 Pcs baggage</a></li>
                    </ul> 
                </div>
            </div>
            
            <!-- Search Result Box -->
            <div class="block">
                <div class="topRow">
                    <div class="icon"><img src="images/airlines/airarabia.png" width="100" height="100" alt=""></div>
                    <div class="name">Air Arabia</div>
                    <div class="price">
                       <span>NRP. 38,000</span>
                        <a href="#" title="Book Now">Book Now</a>
                    </div>
                </div>
                <div class="midRow">
                    <div class="colLeft">
                        <h6>Thu, 14 Dec | Kathmandu to Sharjah (near Dubai)</h6>
                        <ul>
                            <li class="first">KTM <strong>11:30</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="time">5h 0m | Non-stop</div>
                            </li>
                            <li class="third">SHJ <strong>14:45</strong></li>
                        </ul>
                    </div>
                    <div class="colRight">
                        <h6>Wed, 07 Feb | Sharjah (near Dubai) to Kathmandu</h6>
                        <ul>
                            <li class="first">SHJ <strong>05:15</strong></li>
                            <li class="second">
                                <div class="line"></div>
                                <div class="time">3h 50m | Non-stop</div>
                            </li>
                            <li class="third">KTM <strong>10:50</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="botRow">
                    <ul>
                        <li>Refundable</li>
                        <li><a href="#" title="">25 Kgs baggage</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>