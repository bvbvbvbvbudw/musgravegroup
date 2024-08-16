@extends('musgravegroup.base')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/alerts.css')}}">
@endsection
@section('body-classes', 'vacancies-template-default application-form-template single single-vacancies wp-custom-logo')
@section('title', '')
@section('content')
    <article id="post-9205"
             class="post-9205 vacancies type-vacancies status-publish hentry category-careers sector-retail-sales">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="login-register">
                <p>
                    <a style="margin-top: 20px;" href="/amr/login.php">Login</a>
                </p>

            </div>
            <div class="container" style="margin-top: 60px;">
                <h1>Application form</h1>
            </div>
        </header><!-- .entry-header -->

        <div class="entry-content container" data-aos="fade-up" data-aos-once="true">

            <p></p>
            <div id="emailalerts">
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
                        <link href="/css/jquery.datePicker.css" rel="stylesheet" type="text/css" media="screen">
                        <script src="js/jquery-latest.min.js" type="text/javascript"></script>
                        <script type="text/javascript" src="js/jquery.corner.js"></script>
                        <script src="js/validation.js" type="text/javascript"></script>
                        <script type="text/javascript" src="js/jquery.datePicker.js"></script>
                        <script type="text/javascript" src="js/date.js"></script>
                        <script type="text/javascript" src="js/searchForm.js"></script>
                        <script src="/js/iframeResizePipe.js" type="text/javascript"></script>
                        <script src="/js/jquery-collapsible-fieldset.js" type="text/javascript"></script>
                        <script src="/js/postcodeLookup.js" type="text/javascript"></script>
                        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                        <link rel="stylesheet" href="/css/jquery.ui.theme.css" type="text/css">
                        <form action="emailAlerts.php?rand=0.291248001723739969" name="applyForm" id="applyForm"
                              method="post" enctype="multipart/form-data" autocomplete="off">
                            <input type="hidden" name="post" value="1"><input type="hidden" name="siteURL" id="siteURL"
                                                                              value="[site url]"><input type="hidden" id="xmlWizardDefinition" name="xmlWizardDefinition"
                                                                                                        value="#xmlWizardDefinition#"><input type="hidden" name="jId" value="#jId#"><input
                                type="hidden" name="deCacher" value="1947810145"><input type="hidden"
                                                                                        name="postcodeLookupToken" id="postcodeLookupToken" value="#postcodeLookupToken#"><input
                                type="hidden" id="applicantId_encode" name="applicantId_encode" value=""><input
                                type="hidden" name="requirementId_encode" value=""><input type="hidden" name="pageLink"
                                                                                          id="pageLink"
                                                                                          value="applyForm.php?fromGet=1&amp;pageId=1&amp;applicantId_encode=&amp;requirementId_encode=&amp;xwd=#xwd#"><input
                                type="hidden" name="pageId" value="1"><input type="hidden" id="formAction" name="formAction"
                                                                             value=""><input type="hidden" name="xwd" value="#xwd#">
                            <div class="formDiv" style="">
                                <div>
                                    <p class="formDiv">

                                    </p>
                                    <h2>Job Alerts</h2>

                                    <p>Interested in working for Musgrave and didn't find an opportunity of interest at
                                        this time? Create a Job Alert to keep informed of opportunities</p>

                                    <p>Please enter all your details and click the submit button.</p>

                                    <p>Fields marked with <span class="errorRed">*</span> must be completed.</p>


                                    <p></p>
                                </div>
                            </div>
                            <br clear="all">
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idm1867504" id="">
                                    <legend name="idm1867504">Contact and login details</legend>
                                    <div style="clear:both;" id="divtitle">
                                        <label style="" for="title">Title<span id="mandmarker_title" class="errorRed">
											*
										</span></label><select name="title" id="title" class="" style=""
                                                               onchange="doValidation(this, this.value, '', 'Title is required');">
                                            <option value="Mr">Mr</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Rev">Rev</option>
                                        </select>
                                        <div id="titleErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="titleErrorLabelInline" class="errorLabelDiv" style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divfirstName">
                                        <label style="" for="firstName">Forename(s)<span id="mandmarker_firstName"
                                                                                         class="errorRed">
											*
										</span></label><input type="text" name="firstName" id="firstName" class=""
                                                              style="" value="" placeholder=""
                                                              onblur="doValidation(this, this.value, '', 'Forename(s) is required');">
                                        <div id="firstNameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="firstNameErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divsecondName">
                                        <label style="" for="secondName">Surname<span id="mandmarker_secondName"
                                                                                      class="errorRed">
											*
										</span></label><input type="text" name="secondName" id="secondName" class=""
                                                              style="" value="" placeholder=""
                                                              onblur="doValidation(this, this.value, '', 'Surname is required');">
                                        <div id="secondNameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="secondNameErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divmobileTelephone">
                                        <label style="" for="mobileTelephone">Telephone<span id="mandmarker_mobileTelephone"
                                                                                             class="errorRed">
											*
										</span></label><input type="text" name="mobileTelephone" id="mobileTelephone"
                                                              class="" style="" value="" placeholder=""
                                                              onblur="doValidation(this, this.value, '', 'Telephone is required');">
                                        <div id="mobileTelephoneErrorLabel" class="errorLabelDiv" style="display:none;">
                                        </div>
                                        <div id="mobileTelephoneErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="div">
                                        <p>

                                        </p>
                                        <p>Your email address should be used as your user name when logging into your
                                            account.We will use your email address to update you on the progress of your
                                            application so please ensure that it is correct.</p>

                                        <p></p>
                                    </div>
                                    <div style="clear:both;" id="divapplicantEmail">
                                        <label style="" for="applicantEmail">Email<span id="mandmarker_applicantEmail"
                                                                                        class="errorRed">
											*
										</span></label><input type="text" name="applicantEmail" id="applicantEmail"
                                                              class="" style="" value="" placeholder=""
                                                              onblur="doValidation(this, this.value, 'SameAs('emailConfirm');ValidEmail();CheckEmailNotUsed();', 'Please ensure you use a valid email address and fill in both the email and confirm email fields');">
                                        <div id="applicantEmailErrorLabel" class="errorLabelDiv" style="display:none;">
                                        </div>
                                        <div id="applicantEmailErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divemailConfirm">
                                        <label style="" for="emailConfirm">Confirm email<span id="mandmarker_emailConfirm"
                                                                                              class="errorRed">
											*
										</span></label><input type="text" name="emailConfirm" id="emailConfirm" class=""
                                                              style="" value="" placeholder=""
                                                              onblur="doValidation(this, this.value, '', 'Confirm email is required');">
                                        <div id="emailConfirmErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="emailConfirmErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="div">
                                        <p>
                                        </p>
                                        <p>Any password you choose must be at least 6 characters long and contain both
                                            upper and lower case characters with at least 1 number.</p>

                                        <p></p>
                                    </div>
                                    <div style="clear:both;" id="divcriteria1[]">
                                        <label style="" for="criteria1[]">Preferred work sector(s) (hold control to
                                            select more than one item)</label><select name="criteria1[]" id="criteria1[]"
                                                                                      class="inputCheckbox" style="height:300px !important" multiple="">
                                            <option value="">Any</option>
                                            <option value="Bakery">Bakery</option>
                                            <option value="Business Development">Business Development</option>
                                            <option value="Butchery">Butchery</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Communications">Communications</option>
                                            <option value="Customer Services">Customer Services</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Human Resources">Human Resources</option>
                                            <option value="IT">IT</option>
                                            <option value="Logistics / Supply Chain">Logistics / Supply Chain</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Operations">Operations</option>
                                            <option value="Retail Management">Retail Management</option>
                                            <option value="Retail Sales">Retail Sales</option>
                                            <option value="Retailer Services">Retailer Services</option>
                                            <option value="Sales &amp; Development">Sales &amp; Development</option>
                                            <option value="Store Development">Store Development</option>
                                            <option value="Trading">Trading</option>
                                        </select>
                                        <div id="criteria1[]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="criteria1[]ErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divcriteria2[]">
                                        <label style="" for="criteria2[]">Preferred work location(s) (hold control to
                                            select more than one item)</label><select name="criteria2[]" id="criteria2[]"
                                                                                      class="inputCheckbox" style="height:130px !important" multiple="">
                                            <option value="">Any</option>
                                            <option value="Connaught">Connaught</option>
                                            <option value="Cork">Cork</option>
                                            <option value="Dublin">Dublin</option>
                                            <option value="Leinster">Leinster</option>
                                            <option value="Munster">Munster</option>
                                        </select>
                                        <div id="criteria2[]ErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="criteria2[]ErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idm2474864" id="">
                                    <div style="clear:both;" id="div">
                                        <p class="formDiv">
                                            Please click 'Save email alerts' to save your email alert details.
                                        </p>
                                    </div>
                                    <div style="clear:both;" id="divformAction">
                                        <label class="submitterLabel" style="" for="formAction">Save email
                                            alerts</label><input type="submit" name="formAction" id="formAction"
                                                                 class="submitterInput" style="" value="Save email alerts">
                                    </div>
                                </fieldset>
                            </div>
                            <script language="javascript">

                                /*
                                if (typeof jQuery !== 'undefined')
                                    $("fieldset.collapsible").collapsible();
                                */

                            </script>
                        </form>
                        <script language="javascript"></script>
                        <br clear="all">
                    </div>
                </div>
                <!---->
            </div>
            <p></p>

            <div class="related-content">
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/the-green-kitchen.jpg);">
                    </div>
                    <a href="https://www.musgravegroup.com/careers/current-vacancies/"></a>
                    <h2><a href="https://www.musgravegroup.com/careers/current-vacancies/">All Jobs</a></h2>
                </div>
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/our-brands-1.jpg);">
                    </div>
                    <a href="https://www.musgravegroup.com/brands/"></a>
                    <h2><a href="https://www.musgravegroup.com/brands/">Our brands</a></h2>
                </div>
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/food-innovation.jpg);">
                    </div>
                    <a href="https://www.musgravegroup.com/news-blogs/"></a>
                    <h2><a href="https://www.musgravegroup.com/news-blogs/">Latest news</a></h2>
                </div>
            </div>

        </div><!-- .entry-content -->
    </article><!-- #post-9205 -->
@endsection
