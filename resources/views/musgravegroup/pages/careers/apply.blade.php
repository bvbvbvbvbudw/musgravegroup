@extends('musgravegroup.base')

@section('title', 'Application form')
@section('meta')
@endsection
@section('style')
    <link href="{{ asset('css/musgravegroup/amris.css') }}" rel="stylesheet">
@endsection

@section('body-classes', 'vacancies-template-default application-form-template single single-vacancies wp-custom-logo')
@section('content')
    <article id="post-9205"
             class="post-9205 vacancies type-vacancies status-publish hentry category-careers sector-retail-sales">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container" style="margin-top: 60px;">
                <h1>Application form</h1>
            </div>
        </header>
        <div class="entry-content container" data-aos="fade-up" data-aos-once="true">
            <p></p>
            <div id="applyform">
                <style>
                    #menu-champions li.whitebg a {
                        color: #000;
                    }

                    #menu-champions li.whitebg a:hover {
                        color: #666;
                    }
                </style>
                <br clear="all">
                <div id="mainContainer">
                    <div id="application_innerContainer">
                        <form action="{{ route('page.careers.vacancies.apply.send', $id) }}" name="applyForm" id="applyForm" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="formDiv" style="">
                                <div>
                                    <p class="formDiv">
                                        Thank you for choosing Musgrave as a place you'd like to work! We are aiming to
                                        be the best in everything
                                        we do: delivering for our retailers and food service partners, and we are
                                        tenacious in our pursuit of our
                                        business goals. Our people are the strongest part of our business - and vital to
                                        our continued success!
                                    </p>
                                </div>
                            </div>
                            <div class="formDiv" style="">
                                <div>
                                    <p class="formDiv">
                                        Your application will only take a few minutes to complete - we understand your
                                        time is valuable and once
                                        we receive your details we will contact you as soon as we can. Best of luck!
                                    </p>
                                </div>
                            </div>
                            <div class="formDiv" style="">
                                <div>
                                    <p class="formDiv">
                                    </p>
                                    <h3>Personal Details</h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="formDiv" style="">
                                <div>
                                    <p class="formDiv">
                                    </p>
                                    <p>Fields marked with <span class="errorRed">*</span> must be completed.</p>
                                    <p></p>
                                </div>
                            </div>
                            <br clear="all">
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp902992" id="">
                                    <div style="clear:both;" id="divtitle">
                                        <label style="" for="title">Title<span id="mandmarker_title" class="errorRed">*</span></label>
                                        <select required name="title" id="title" class="" style="" onchange="doValidation(this, this.value, '', 'Title is required');">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Dr">Dr</option>
                                        </select>
                                        <div id="titleErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="titleErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divfirstName">
                                        <label style="" for="firstName">
                                            First Name
                                            <span id="mandmarker_firstName" class="errorRed">*
                                        </span>
                                        </label>
                                        <input required type="text" name="firstName" id="firstName" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, '', 'First Name is required');">
                                        <div id="firstNameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="firstNameErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divsecondName">
                                        <label style="" for="secondName">
                                            Surname<span id="mandmarker_secondName" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="secondName" id="secondName" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, '', 'Surname is required');">
                                        <div id="secondNameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="secondNameErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp912848" id="">
                                    <div style="clear:both;" id="divaddress1">
                                        <label style="" for="address1">Address Line 1<span id="mandmarker_address1" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="address1" id="address1" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, '', 'Address Line 1 is required');">
                                        <div id="address1ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="address1ErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divaddress2">
                                        <label style="" for="address2">Address Line 2<span id="mandmarker_address2" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="address2" id="address2" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, '', 'Address Line 2 is required');">
                                        <div id="address2ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="address2ErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divaddress3">
                                        <label style="" for="address3">Town</label>
                                        <input type="text" name="address3" id="address3" class="" style="" value="" placeholder="">
                                        <div id="address3ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="address3ErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divlocation">
                                        <label style="" for="location">County</label>
                                        <input required type="text" name="location" id="location" class="" style="" value="" placeholder="">
                                        <div id="locationErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="locationErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divpostcode">
                                        <label style="" for="postcode">Postcode</label>
                                        <input required type="text" name="postcode" id="postcode" class="" style="" value="" placeholder="">
                                        <div id="postcodeErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="postcodeErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp922320" id="">
                                    <div style="clear:both;" id="divformData[500]">
                                        <label style="" for="formData[500]">
                                            International dial code of your mobile
                                            telephone
                                            <span id="mandmarker_formData[500]" class="errorRed">*</span>
                                        </label>
                                        <select required name="formData[500]" id="formData[500]" class="" style="" onchange="doValidation(this, this.value, '', 'International dial code of your mobile telephone is required');">
                                            <option selected="" value="">Please select</option>
                                            <option value="353">Ireland (+353)</option>
                                            <option value="44">U.K (+44)</option>
                                            <option value="213">Algeria (+213)</option>
                                            <option value="376">Andorra (+376)</option>
                                            <option value="244">Angola (+244)</option>
                                            <option value="1264">Anguilla (+1264)</option>
                                            <option value="1268">Antigua &amp; Barbuda (+1268)</option>
                                            <option value="54">Argentina (+54)</option>
                                            <option value="374">Armenia (+374)</option>
                                            <option value="297">Aruba (+297)</option>
                                            <option value="61">Australia (+61)</option>
                                            <option value="43">Austria (+43)</option>
                                            <option value="994">Azerbaijan (+994)</option>
                                            <option value="1242">Bahamas (+1242)</option>
                                            <option value="973">Bahrain (+973)</option>
                                            <option value="880">Bangladesh (+880)</option>
                                            <option value="1246">Barbados (+1246)</option>
                                            <option value="375">Belarus (+375)</option>
                                            <option value="32">Belgium (+32)</option>
                                            <option value="501">Belize (+501)</option>
                                            <option value="229">Benin (+229)</option>
                                            <option value="1441">Bermuda (+1441)</option>
                                            <option value="975">Bhutan (+975)</option>
                                            <option value="591">Bolivia (+591)</option>
                                            <option value="387">Bosnia Herzegovina (+387)</option>
                                            <option value="267">Botswana (+267)</option>
                                            <option value="55">Brazil (+55)</option>
                                            <option value="673">Brunei (+673)</option>
                                            <option value="359">Bulgaria (+359)</option>
                                            <option value="226">Burkina Faso (+226)</option>
                                            <option value="257">Burundi (+257)</option>
                                            <option value="855">Cambodia (+855)</option>
                                            <option value="237">Cameroon (+237)</option>
                                            <option value="1">Canada (+1)</option>
                                            <option value="238">Cape Verde Islands (+238)</option>
                                            <option value="1345">Cayman Islands (+1345)</option>
                                            <option value="236">Central African Republic (+236)</option>
                                            <option value="56">Chile (+56)</option>
                                            <option value="86">China (+86)</option>
                                            <option value="57">Colombia (+57)</option>
                                            <option value="269">Comoros (+269)</option>
                                            <option value="242">Congo (+242)</option>
                                            <option value="682">Cook Islands (+682)</option>
                                            <option value="506">Costa Rica (+506)</option>
                                            <option value="385">Croatia (+385)</option>
                                            <option value="53">Cuba (+53)</option>
                                            <option value="90392">Cyprus North (+90392)</option>
                                            <option value="357">Cyprus South (+357)</option>
                                            <option value="42">Czech Republic (+42)</option>
                                            <option value="45">Denmark (+45)</option>
                                            <option value="253">Djibouti (+253)</option>
                                            <option value="1809">Dominica (+1809)</option>
                                            <option value="1809">Dominican Republic (+1809)</option>
                                            <option value="593">Ecuador (+593)</option>
                                            <option value="20">Egypt (+20)</option>
                                            <option value="503">El Salvador (+503)</option>
                                            <option value="240">Equatorial Guinea (+240)</option>
                                            <option value="291">Eritrea (+291)</option>
                                            <option value="372">Estonia (+372)</option>
                                            <option value="251">Ethiopia (+251)</option>
                                            <option value="500">Falkland Islands (+500)</option>
                                            <option value="298">Faroe Islands (+298)</option>
                                            <option value="679">Fiji (+679)</option>
                                            <option value="358">Finland (+358)</option>
                                            <option value="33">France (+33)</option>
                                            <option value="594">French Guiana (+594)</option>
                                            <option value="689">French Polynesia (+689)</option>
                                            <option value="241">Gabon (+241)</option>
                                            <option value="220">Gambia (+220)</option>
                                            <option value="7880">Georgia (+7880)</option>
                                            <option value="49">Germany (+49)</option>
                                            <option value="233">Ghana (+233)</option>
                                            <option value="350">Gibraltar (+350)</option>
                                            <option value="30">Greece (+30)</option>
                                            <option value="299">Greenland (+299)</option>
                                            <option value="1473">Grenada (+1473)</option>
                                            <option value="590">Guadeloupe (+590)</option>
                                            <option value="671">Guam (+671)</option>
                                            <option value="502">Guatemala (+502)</option>
                                            <option value="224">Guinea (+224)</option>
                                            <option value="245">Guinea - Bissau (+245)</option>
                                            <option value="592">Guyana (+592)</option>
                                            <option value="509">Haiti (+509)</option>
                                            <option value="504">Honduras (+504)</option>
                                            <option value="852">Hong Kong (+852)</option>
                                            <option value="36">Hungary (+36)</option>
                                            <option value="354">Iceland (+354)</option>
                                            <option value="91">India (+91)</option>
                                            <option value="62">Indonesia (+62)</option>
                                            <option value="98">Iran (+98)</option>
                                            <option value="964">Iraq (+964)</option>
                                            <option value="353">Ireland (+353)</option>
                                            <option value="972">Israel (+972)</option>
                                            <option value="39">Italy (+39)</option>
                                            <option value="1876">Jamaica (+1876)</option>
                                            <option value="81">Japan (+81)</option>
                                            <option value="962">Jordan (+962)</option>
                                            <option value="7">Kazakhstan (+7)</option>
                                            <option value="254">Kenya (+254)</option>
                                            <option value="686">Kiribati (+686)</option>
                                            <option value="850">Korea North (+850)</option>
                                            <option value="82">Korea South (+82)</option>
                                            <option value="965">Kuwait (+965)</option>
                                            <option value="996">Kyrgyzstan (+996)</option>
                                            <option value="856">Laos (+856)</option>
                                            <option value="371">Latvia (+371)</option>
                                            <option value="961">Lebanon (+961)</option>
                                            <option value="266">Lesotho (+266)</option>
                                            <option value="231">Liberia (+231)</option>
                                            <option value="218">Libya (+218)</option>
                                            <option value="417">Liechtenstein (+417)</option>
                                            <option value="370">Lithuania (+370)</option>
                                            <option value="352">Luxembourg (+352)</option>
                                            <option value="853">Macao (+853)</option>
                                            <option value="389">Macedonia (+389)</option>
                                            <option value="261">Madagascar (+261)</option>
                                            <option value="265">Malawi (+265)</option>
                                            <option value="60">Malaysia (+60)</option>
                                            <option value="960">Maldives (+960)</option>
                                            <option value="223">Mali (+223)</option>
                                            <option value="356">Malta (+356)</option>
                                            <option value="692">Marshall Islands (+692)</option>
                                            <option value="596">Martinique (+596)</option>
                                            <option value="222">Mauritania (+222)</option>
                                            <option value="269">Mayotte (+269)</option>
                                            <option value="52">Mexico (+52)</option>
                                            <option value="691">Micronesia (+691)</option>
                                            <option value="373">Moldova (+373)</option>
                                            <option value="377">Monaco (+377)</option>
                                            <option value="976">Mongolia (+976)</option>
                                            <option value="1664">Montserrat (+1664)</option>
                                            <option value="212">Morocco (+212)</option>
                                            <option value="258">Mozambique (+258)</option>
                                            <option value="95">Myanmar (+95)</option>
                                            <option value="264">Namibia (+264)</option>
                                            <option value="674">Nauru (+674)</option>
                                            <option value="977">Nepal (+977)</option>
                                            <option value="31">Netherlands (+31)</option>
                                            <option value="687">New Caledonia (+687)</option>
                                            <option value="64">New Zealand (+64)</option>
                                            <option value="505">Nicaragua (+505)</option>
                                            <option value="227">Niger (+227)</option>
                                            <option value="234">Nigeria (+234)</option>
                                            <option value="683">Niue (+683)</option>
                                            <option value="672">Norfolk Islands (+672)</option>
                                            <option value="670">Northern Marianas (+670)</option>
                                            <option value="47">Norway (+47)</option>
                                            <option value="968">Oman (+968)</option>
                                            <option value="680">Palau (+680)</option>
                                            <option value="507">Panama (+507)</option>
                                            <option value="675">Papua New Guinea (+675)</option>
                                            <option value="595">Paraguay (+595)</option>
                                            <option value="51">Peru (+51)</option>
                                            <option value="63">Philippines (+63)</option>
                                            <option value="48">Poland (+48)</option>
                                            <option value="351">Portugal (+351)</option>
                                            <option value="1787">Puerto Rico (+1787)</option>
                                            <option value="974">Qatar (+974)</option>
                                            <option value="262">Reunion (+262)</option>
                                            <option value="40">Romania (+40)</option>
                                            <option value="7">Russia (+7)</option>
                                            <option value="250">Rwanda (+250)</option>
                                            <option value="378">San Marino (+378)</option>
                                            <option value="239">Sao Tome &amp; Principe (+239)</option>
                                            <option value="966">Saudi Arabia (+966)</option>
                                            <option value="221">Senegal (+221)</option>
                                            <option value="381">Serbia (+381)</option>
                                            <option value="248">Seychelles (+248)</option>
                                            <option value="232">Sierra Leone (+232)</option>
                                            <option value="65">Singapore (+65)</option>
                                            <option value="421">Slovak Republic (+421)</option>
                                            <option value="386">Slovenia (+386)</option>
                                            <option value="677">Solomon Islands (+677)</option>
                                            <option value="252">Somalia (+252)</option>
                                            <option value="27">South Africa (+27)</option>
                                            <option value="34">Spain (+34)</option>
                                            <option value="94">Sri Lanka (+94)</option>
                                            <option value="290">St. Helena (+290)</option>
                                            <option value="1869">St. Kitts (+1869)</option>
                                            <option value="1758">St. Lucia (+1758)</option>
                                            <option value="249">Sudan (+249)</option>
                                            <option value="597">Suriname (+597)</option>
                                            <option value="268">Swaziland (+268)</option>
                                            <option value="46">Sweden (+46)</option>
                                            <option value="41">Switzerland (+41)</option>
                                            <option value="963">Syria (+963)</option>
                                            <option value="886">Taiwan (+886)</option>
                                            <option value="7">Tajikstan (+7)</option>
                                            <option value="66">Thailand (+66)</option>
                                            <option value="228">Togo (+228)</option>
                                            <option value="676">Tonga (+676)</option>
                                            <option value="1868">Trinidad &amp; Tobago (+1868)</option>
                                            <option value="216">Tunisia (+216)</option>
                                            <option value="90">Turkey (+90)</option>
                                            <option value="7">Turkmenistan (+7)</option>
                                            <option value="993">Turkmenistan (+993)</option>
                                            <option value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                            <option value="688">Tuvalu (+688)</option>
                                            <option value="256">Uganda (+256)</option>
                                            <option value="44">U.K (+44)</option>
                                            <option value="380">Ukraine (+380)</option>
                                            <option value="971">United Arab Emirates (+971)</option>
                                            <option value="598">Uruguay (+598)</option>
                                            <option value="1">USA (+1)</option>
                                            <option value="7">Uzbekistan (+7)</option>
                                            <option value="678">Vanuatu (+678)</option>
                                            <option value="379">Vatican City (+379)</option>
                                            <option value="58">Venezuela (+58)</option>
                                            <option value="84">Vietnam (+84)</option>
                                            <option value="84">Virgin Islands - British (+1284)</option>
                                            <option value="84">Virgin Islands - US (+1340)</option>
                                            <option value="681">Wallis &amp; Futuna (+681)</option>
                                            <option value="969">Yemen (North)(+969)</option>
                                            <option value="967">Yemen (South)(+967)</option>
                                            <option value="260">Zambia (+260)</option>
                                            <option value="263">Zimbabwe (+263)</option>
                                        </select>
                                        <div id="formData[500]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[500]ErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divmobileTelephone">
                                        <label style="" for="mobileTelephone">Mobile Telephone
                                            <span id="mandmarker_mobileTelephone" class="errorRed">*</span>
                                        </label>
                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" required type="text" name="mobileTelephone" id="mobileTelephone" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, '', 'Mobile Telephone is required');">
                                        <div id="mobileTelephoneErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="mobileTelephoneErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="div">
                                        <p class="formDiv"></p>
                                        <p>Your email address should be used as your user name when logging into your
                                            account.We will use your email address to update you on the progress of your
                                            application so please ensure that it is correct.</p>
                                        <p></p>
                                    </div>
                                    <div style="clear:both;" id="divapplicantEmail">
                                        <label style="" for="applicantEmail">
                                            Email<span id="mandmarker_applicantEmail" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="applicantEmail" id="applicantEmail" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, 'SameAs('emailConfirm');ValidEmail();CheckEmailNotUsed();', 'Please ensure you use a valid email address and fill in both the email and confirm email fields');">
                                        <div id="applicantEmailErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="applicantEmailErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divemailConfirm">
                                        <label style="" for="emailConfirm">Confirm email
                                            <span id="mandmarker_emailConfirm" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="emailConfirm" id="emailConfirm" class="" style="" value="" placeholder="" onblur="doValidation(this, this.value, '', 'Confirm email is required');">
                                        <div id="emailConfirmErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="emailConfirmErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp2026528" id="">
                                    <div style="clear:both;" id="divformData[33]">
                                        <label style="" for="formData[33]">
                                            Are you over 16?
                                            <span id="mandmarker_formData[33]" class="errorRed">*</span>
                                        </label>
                                        <div style="width:auto;" class="radioDiv">
                                            <input type="radio" name="formData[33]" class="radio" style="margin-left:3.5em;margin-right:0.5em;display:inline;" value="Yes" alt="Are you over 16? - Yes" id="formData[33]_Yes">
                                            <label for="formData[33]_Yes" class=" radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">Yes</span>
                                            </label>
                                            <input type="radio" name="formData[33]" class="radio" style="margin-left:3.5em;margin-right:0.5em;display:inline;" value="No" alt="Are you over 16? - No" id="formData[33]_No"><label
                                                for="formData[33]_No" class=" radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">No</span>
                                            </label>
                                        </div>
                                        <div id="formData[33]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[33]ErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divformData[23]">
                                        <label style="" for="formData[23]">Are you eligible to work in the EU?
                                            <span id="mandmarker_formData[23]" class="errorRed">*</span>
                                        </label>
                                        <div style="width:auto;" class="radioDiv">
                                            <input type="radio" name="formData[23]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;" value="Yes"
                                                   alt="Are you eligible to work in the EU? - Yes" id="formData[23]_Yes">
                                            <label for="formData[23]_Yes" class=" radioLabel">
                                                <span class="outer"><span class="inner"></span></span>
                                                <span class="radio_display_text">Yes</span>
                                            </label>
                                            <input type="radio" name="formData[23]" class="radio" style="margin-left:3.5em;margin-right:0.5em;display:inline;" value="No" alt="Are you eligible to work in the EU? - No" id="formData[23]_No">
                                            <label for="formData[23]_No" class=" radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span></span>
                                                <span class="radio_display_text">No</span>
                                            </label>
                                        </div>
                                        <div id="formData[23]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[23]ErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divformData[7495]">
                                        <label style="" for="formData[7495]">
                                            If yes, please provide details
                                        </label>
                                        <input type="text" name="formData[7495]" id="formData[7495]" class="" style="" value="" placeholder="">
                                        <div id="formData[7495]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[7495]ErrorLabelInline" class="errorLabelDiv" style="display:none;">

                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divformData[30]">
                                        <label style="" for="formData[30]">Do you have any criminal convictions?</label>
                                        <div style="width:auto;" class="radioDiv">
                                            <input type="radio" name="formData[30]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;" value="Yes"
                                                   alt="Do you have any criminal convictions? - Yes"
                                                   id="formData[30]_Yes"><label for="formData[30]_Yes"
                                                                                class=" radioLabel"><span class="outer"><span
                                                        class="inner"></span></span><span
                                                    class="radio_display_text">Yes</span>
                                            </label>
                                            <input type="radio" name="formData[30]" class="radio" style="margin-left:3.5em;margin-right:0.5em;display:inline;" value="No" alt="Do you have any criminal convictions? - No" id="formData[30]_No">
                                            <label for="formData[30]_No" class=" radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">No</span>
                                            </label>
                                        </div>
                                        <div id="formData[30]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[30]ErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divformData[79]">
                                        <label style="" for="formData[79]">If yes, please provide details</label><input
                                            type="text" name="formData[79]" id="formData[79]" class="" style="" value=""
                                            placeholder="">
                                        <div id="formData[79]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[79]ErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divformData[111]">
                                        <label style="" for="formData[111]">Where did you see this role advertised?
                                            <span id="mandmarker_formData[111]" class="errorRed">*</span>
                                        </label>
                                        <select required name="formData[111]" id="formData[111]" class="" style="" onchange="doValidation(this, this.value, '', 'Where did you see this role advertised? is required');">
                                            <option value="">-- Please select --</option>
                                            <option value="Musgrave Website">Musgrave Website</option>
                                            <option value="IrishJobs.ie">IrishJobs.ie</option>
                                            <option value="NIJobs.com">NIJobs.com</option>
                                            <option value="LinkedIn">LinkedIn</option>
                                            <option value="Jobbio">Jobbio</option>
                                            <option value="Specialist Press">Specialist Press</option>
                                            <option value="National Press">National Press</option>
                                            <option value="Referral">Referral</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="TikTok">TikTok</option>
                                            <option value="Spotify">Spotify</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div id="formData[111]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="formData[111]ErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp2054752" id=""></fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp2055952" id=""></fieldset>
                            </div>
                            <div id="" class="sectionDiv submitDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idp2057328" id="">
                                    <div class="submitleft" style="clear:both;" id="divformAction">
                                        <label class="labelHidden" style="" for="formAction">
                                            Save and continue
                                        </label>
                                        <input type="submit" name="formAction" id="formAction" class="submitterInput" style="" value="Save and continue">
                                    </div>
{{--                                    <div class="submitright" style="clear:both;" id="divformAction">--}}
{{--                                        <label class="labelHidden" style="" for="formAction">--}}
{{--                                            Save and return later--}}
{{--                                        </label>--}}
{{--                                        <input type="submit" name="formAction" id="formAction" class="submitterInput" style="" value="Save and return later">--}}
{{--                                    </div>--}}
                                </fieldset>
                            </div>
                        </form>
                        <br clear="all">
                    </div>
                </div>
            </div>
            <p></p>
            <div class="related-content">
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/the-green-kitchen.jpg);">
                    </div>
                    <a href="{{ route('page.careers.current') }}"></a>
                    <h2><a href="{{ route('page.careers.current') }}">All Jobs</a></h2>
                </div>
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/our-brands-1.jpg);">
                    </div>
                    <a href="{{ route('page.brand') }}"></a>
                    <h2><a href="{{ route('page.brand') }}">Our brands</a></h2>
                </div>
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/food-innovation.jpg);">
                    </div>
                    <a href="{{ route('page.news') }}"></a>
                    <h2><a href="{{ route('page.news') }}">Latest news</a></h2>
                </div>
            </div>
        </div>
    </article>
@endsection
