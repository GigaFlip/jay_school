<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="<?php echo assets_url();?>js/custom.js"></script>
<div class="container">
    <!--mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2-->
    <div id="signupbox" style=" margin-top:50px" class="">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Job Application</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" id="teachers_form" onsubmit="return false;">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S'/>

                    <div id="post_for" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> Applying For<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select name="post_for" class="form-control" style="margin-bottom: 10px">
                                <option value="-1">--SELECT POST--</option>
                                <option value="Vice-Principal">Vice-Principal</option>
                                <option value="Primary Coordinator">Primary Coordinator</option>
                                <option value="Administrative Officer">Administrative Officer</option>
                                <option value="Admission Counselor">Admission Counselor</option>
                                <option value="Front Desk">Front Desk</option>
                                <option value="Accountant">Accountant</option>
                                <option value="DTP Operartor">DTP Operartor</option>
                                <option value="PA to Director">PA to Director</option>
                                <option value="Teachers - Nursery">Teachers - Nursery</option>
                                <option value="Primary">Primary</option>
                                <option value="Montessori">Montessori</option>
                                <option value="Activity">Activity</option>
                                <option value="Personality Development">Personality Development</option>
                                <option value="Music">Music</option>
                                <option value="Dance">Dance</option>
                                <option value="Physical Ed.">Physical Ed. </option>
                                <option value="Librarian">Librarian</option>
                                <option value="Nutritionist">Nutritionist</option>
                                <option value="Student Counselor">Student Counselor</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Attender">Attender</option>
                                <option value="Caretaker">Caretaker</option>
                                <option value="Security ">Security</option>
                            </select>
                        </div>
                    </div>

                    <div id="subject1" class="form-group required">
                        <label for="id_username" class="control-label col-md-4 "> Subject (Preference
                            1) </label>
                        <div class="controls col-md-8 " style="margin-bottom: 10px">
                            <select name="subject1" class="form-control">
                                <option value="">--SELECT SUBJECT--</option>
                                <option value="ACCOUNTANCY">ACCOUNTANCY</option>
                                <option value="ART CRAFT">ART &amp; CRAFT</option>
                                <option value="BIOLOGY">BIOLOGY</option>
                                <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>
                                <option value="CHEMISTRY">CHEMISTRY</option>
                                <option value="COMPUTERS / ICT">COMPUTERS / ICT</option>
                                <option value="COUNSELLOR">COUNSELLOR</option>
                                <option value="DANCE">DANCE</option>
                                <option value="DATA ENTRY">DATA ENTRY</option>
                                <option value="ECONOMICS">ECONOMICS</option>
                                <option value="ENGLISH">ENGLISH</option>
                                <option value="ENVIRONMENTAL SCIENCE">ENVIRONMENTAL SCIENCE</option>
                                <option value="GEOGRAPHY">GEOGRAPHY</option>
                                <option value="HINDI">HINDI</option>
                                <option value="HISTORY">HISTORY</option>
                                <option value="HUMAN RIGHTS GENDER STUDIES">HUMAN RIGHTS &amp; GENDER STUDIES</option>
                                <option value="INFORMATICS PRACTICES">INFORMATICS PRACTICES</option>
                                <option value="LAB ASSISTANT">LAB ASSISTANT</option>
                                <option value="LEGAL STUDIES">LEGAL STUDIES</option>
                                <option value="LIBRARY">LIBRARY</option>
                                <option value="LIFE SKILLS">LIFE SKILLS</option>
                                <option value="MARATHI">MARATHI</option>
                                <option value="MATHEMATICS">MATHEMATICS</option>
                                <option value="MEDIA STUDIES">MEDIA STUDIES</option>
                                <option value="MUSIC - INSTRUMENTAL">MUSIC - INSTRUMENTAL</option>
                                <option value="MUSIC - VOCAL">MUSIC - VOCAL</option>
                                <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
                                <option value="PHYSICS">PHYSICS</option>
                                <option value="POLITICAL SCIENCE">POLITICAL SCIENCE</option>
                                <option value="PSYCHOLOGY">PSYCHOLOGY</option>
                                <option value="PUNJABI">PUNJABI</option>
                                <option value="SANSKRIT">SANSKRIT</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="SOCIAL SCIENCE">SOCIAL SCIENCE</option>
                                <option value="TAMIL">TAMIL</option>
                                <option value="THEATRE">THEATRE</option>
                                <option value="ZOOLOGY">ZOOLOGY</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>

                    <div id="subject2" class="form-group required">
                        <label for="id_username" class="control-label col-md-4 "> Subject (Preference
                            2) </label>
                        <div class="controls col-md-8 " style="margin-bottom: 10px">
                            <select name="subject2" class="form-control">
                                <option value="">--SELECT SUBJECT--</option>
                                <option value="ACCOUNTANCY">ACCOUNTANCY</option>
                                <option value="ART CRAFT">ART &amp; CRAFT</option>
                                <option value="BIOLOGY">BIOLOGY</option>
                                <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>
                                <option value="CHEMISTRY">CHEMISTRY</option>
                                <option value="COMPUTERS / ICT">COMPUTERS / ICT</option>
                                <option value="COUNSELLOR">COUNSELLOR</option>
                                <option value="DANCE">DANCE</option>
                                <option value="DATA ENTRY">DATA ENTRY</option>
                                <option value="ECONOMICS">ECONOMICS</option>
                                <option value="ENGLISH">ENGLISH</option>
                                <option value="ENVIRONMENTAL SCIENCE">ENVIRONMENTAL SCIENCE</option>
                                <option value="GEOGRAPHY">GEOGRAPHY</option>
                                <option value="HINDI">HINDI</option>
                                <option value="HISTORY">HISTORY</option>
                                <option value="HUMAN RIGHTS GENDER STUDIES">HUMAN RIGHTS &amp; GENDER STUDIES</option>
                                <option value="INFORMATICS PRACTICES">INFORMATICS PRACTICES</option>
                                <option value="LAB ASSISTANT">LAB ASSISTANT</option>
                                <option value="LEGAL STUDIES">LEGAL STUDIES</option>
                                <option value="LIBRARY">LIBRARY</option>
                                <option value="LIFE SKILLS">LIFE SKILLS</option>
                                <option value="MARATHI">MARATHI</option>
                                <option value="MATHEMATICS">MATHEMATICS</option>
                                <option value="MEDIA STUDIES">MEDIA STUDIES</option>
                                <option value="MUSIC - INSTRUMENTAL">MUSIC - INSTRUMENTAL</option>
                                <option value="MUSIC - VOCAL">MUSIC - VOCAL</option>
                                <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
                                <option value="PHYSICS">PHYSICS</option>
                                <option value="POLITICAL SCIENCE">POLITICAL SCIENCE</option>
                                <option value="PSYCHOLOGY">PSYCHOLOGY</option>
                                <option value="PUNJABI">PUNJABI</option>
                                <option value="SANSKRIT">SANSKRIT</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="SOCIAL SCIENCE">SOCIAL SCIENCE</option>
                                <option value="TAMIL">TAMIL</option>
                                <option value="THEATRE">THEATRE</option>
                                <option value="ZOOLOGY">ZOOLOGY</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <div class="panel-title"><h3>Personal Details
                            </h3></div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
                    </div>

                    <div id="firstname" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> FirstName<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md textinput textInput form-control" id="first_name" maxlength="30"
                                   name="firstname" placeholder="First Name" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="lasttname" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> LastName<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md textinput textInput form-control" id="last_name" maxlength="30"
                                   name="lastname" placeholder="Last Name" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="dateofbirth" class="form-group required">
                        <label for="dob" class="control-label col-md-4  requiredField"> Date of Birth<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input name="dob" class="input-md textinput textInput form-control" id="dob" maxlength="30"
                                   style="margin-bottom: 10px" type="date" required/>
                        </div>
                    </div>

                    <div id="email" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> E-mail<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30"
                                   name="email" placeholder="E-mail address" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="mobile" class="form-group required">
                        <label for="mobile_no" class="control-label col-md-4  requiredField">Mobile No <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" name="mobile" id="mobile_no" placeholder="mobile no "
                                   style="margin-bottom: 10px" type="number" required/>
                        </div>
                    </div>


                    <div id="gender" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">Gender<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select name="gender" class="form-control" style="margin-bottom: 10px" required>
                                <option value="-1">--SELECT GENDER--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>


                    <div id="religion" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">Religion<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select name="religion" class="form-control" style="margin-bottom: 10px" required>
                                <option value="-1">--Select Religion--</option>
                                <option value="Buddhist">Buddhist</option>
                                <option value="Christian">Christian</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Jainism">Jainism</option>
                                <option value="Islam">Islam</option>
                                <option value="Sikh">Sikh</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="caste" class="control-label col-md-4  requiredField">Caste<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="caste" name="caste"
                                   placeholder="caste name" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>
                    <div id="community_category" class="form-group required">
                        <label for="community_category" class="control-label col-md-4  requiredField">Community<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select name="community" class="form-control" style="margin-bottom: 10px" required>
                                <option value="-1">--Select community--</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="MBC">MBC</option>
                                <option value="BC">BC</option>
                                <option value="OC">OC</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>

                    <div id="aadharcard" class="form-group required">
                        <label for="aadhar" class="control-label col-md-4 "> Aadhar Card No </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="aadhar" name="aadhar"
                                   placeholder="Your Aadhar Card No" style="margin-bottom: 10px" type="number" />
                        </div>
                    </div>

                    <div id="pan_no" class="form-group required">
                        <label for="pan" class="control-label col-md-4 "> PAN Card No </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="pan" name="pan"
                                   placeholder="Your PAN No" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>
                    <div id="country" class="form-group required">
                        <label for="nationality" class="control-label col-md-4  requiredField">Nationality <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="nationality" name="nationality"
                                   placeholder="Your Nationality " value="Indian" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>
                    <div id="marital_status" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">Marital Status<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select name="marital_status" class="form-control" style="margin-bottom: 10px" required>
                                <option value="-1">--Select Marital Status--</option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="driving_license_no" class="control-label col-md-4 ">Driving License No
                        </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="driving_license_no" name="driving_license"
                                   placeholder="Driving License No" style="margin-bottom: 10px" type="number"/>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="blood_group" class="control-label col-md-4 ">Blood Group
                        </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="blood_group" name="blood"
                                   placeholder="Your Blood Group" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>

                    <div class="panel-heading">
                        <div class="panel-title"><h3>Present Residence Address / Address for Communication
                            </h3></div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
                    </div>

                    <div id="door_no" class="form-group required">
                        <label for="doorno" class="control-label col-md-4  requiredField">House/Door/Flat No <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="doorno" placeholder="House/Door/Flat No"
                                   style="margin-bottom: 10px" type="text" name="res_addr[]" required/>
                        </div>
                    </div>

                    <div id="street" class="form-group required">
                        <label for="street_name" class="control-label col-md-4  requiredField">Street/Locality <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" name="res_addr[]" id="street_name"
                                   placeholder="Street/Locality " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="s_district" class="form-group required">
                        <label for="sub_district" class="control-label col-md-4  requiredField">Sub-District/District
                            <span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" name="res_addr[]" id="sub_district"
                                   placeholder="Sub-District/District " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="city" class="form-group required">
                        <label for="city_name" class="control-label col-md-4  requiredField">City <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" name="res_addr[]" id="city_name" placeholder="City name"
                                   style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>


                    <div id="state" class="form-group required">
                        <label for="state_name" class="control-label col-md-4  requiredField">State <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" name="res_addr[]" id="state_name" placeholder="State Name "
                                   style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>


                    <div id="pin" class="form-group required">
                        <label for="pin_code" class="control-label col-md-4  requiredField">PIN <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" name="res_addr[]" id="pin_code" placeholder="Pincode "
                                   style="margin-bottom: 10px" type="number" required/>
                        </div>
                    </div>

                    <div id="alt_tel" class="form-group required">
                        <label for="alt_tel" class="control-label col-md-4  requiredField"> Residence Telephone No.(with
                            STD Code)/ Alternative Mobile No.<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="alttel" name="res_addr[]"
                                   placeholder="Alternate Phone No. " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div class="panel-heading">
                        <div class="panel-title"><h3>Permanent Address
                            </h3></div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
                    </div>

                    <div id="p_door_no" class="form-group required">
                        <label for="p_doorno" class="control-label col-md-4  requiredField">House/Door/Flat No <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_doorno" name="per_addr[]"
                                   placeholder="House/Door/Flat No" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="p_street" class="form-group required">
                        <label for="p_street_name" class="control-label col-md-4  requiredField">Street/Locality <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_street_name" name="per_addr[]"
                                   placeholder="Street/Locality " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="p_s_district" class="form-group required">
                        <label for="p_sub_district" class="control-label col-md-4  requiredField">Sub-District/District
                            <span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_sub_district" name="per_addr[]"
                                   placeholder="Sub-District/District " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>


                    <div id="p_city" class="form-group required">
                        <label for="p_city_name" class="control-label col-md-4  requiredField">City <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_city_name" placeholder="City Name" name="per_addr[]"
                                   style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>


                    <div id="p_state" class="form-group required">
                        <label for="p_state_name" class="control-label col-md-4  requiredField">State <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_state_name" placeholder="State Name " name="per_addr[]"
                                   style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>


                    <div id="p_pin" class="form-group required">
                        <label for="p_pin_code" class="control-label col-md-4  requiredField">PIN <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_pin_code" placeholder="Pincode " name="per_addr[]"
                                   style="margin-bottom: 10px" type="number" required/>
                        </div>
                    </div>

                    <div id="p_alt_tel" class="form-group required">
                        <label for="p_alt_tel" class="control-label col-md-4  requiredField"> Residence Telephone
                            No.(with STD Code)/ Alternative Mobile No.<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="p_alttel" name="per_addr[]"
                                   placeholder="Phone No." style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div class="panel-heading">
                        <div class="panel-title"><h3>Family details</h3></div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
                    </div>

                    <div id="f_name" class="form-group required">
                        <label for="fname" class="control-label col-md-4  requiredField">Father Name <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="fname" placeholder="Father Name" name="fathername"
                                   style="margin-bottom: 10px" type="text"  required/>
                        </div>
                    </div>

                    <div id="f_occu" class="form-group required">
                        <label for="foccu" class="control-label col-md-4  requiredField"> Father's Occupation <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="foccu" name="fatheroccu"
                                   placeholder="Father's Occupation" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="m_name" class="form-group required">
                        <label for="mname" class="control-label col-md-4  requiredField">Mother's Name
                            <span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="mname" name="mothername"
                                   placeholder="Mother's Name " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div id="m_occu" class="form-group required">
                        <label for="moocu" class="control-label col-md-4  requiredField">Mother's Occupation <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="moocu" name="motheroccu" placeholder="Mother's Occupation"
                                   style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <!-- Change this field from text to date -->
                    <div id="date_of_marriage" class="form-group required">
                        <label for="date_of_year" class="control-label col-md-4 ">Date of Marriage
                        </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="date_of_year" name="dom"
                                   placeholder="Date of Marriage" style="margin-bottom: 10px" type="date"/>
                        </div>
                    </div>

                    <div id="spouse_name" class="form-group required">
                        <label for="spousename" class="control-label col-md-4 ">Spouse Name </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="spousename" placeholder="Spouse Name" name="spousename"
                                   style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>



                    <div id="spouse_job" class="form-group required">
                        <label class="control-label col-md-4 "> Is Spouse's
                            Job Transferable </label>
                        <div class="controls col-md-8 ">
                            <select name="spousejob" class="form-control" style="margin-bottom: 10px">
                                <option value="-1">--Select--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>
                        </div>
                    </div>


                    <div id="spouse_mobile" class="form-group required">
                        <label for="spousemobile" class="control-label col-md-4 ">Spouse's Mobile No </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="spousemobile" name="spousemob"
                                   placeholder="spouse's Mobile no"
                                   style="margin-bottom: 10px" type="number" maxlength="10"/>
                        </div>
                    </div>

                    <div id="spouse_qualification" class="form-group required">
                        <label for="spousequalification" class="control-label col-md-4 ">Spouse's Qualification </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="spousequalification" name="spousequalification"
                                   placeholder="spouse qualification"
                                   style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>

                    <div id="spouse_profession" class="form-group required">
                        <label for="spouseprofession" class="control-label col-md-4 "> Spouse's
                            Profession.
                             </label>
                        </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="spouseprofession" name="spouseprofession"
                                   placeholder="spouse profession" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>

                    <div id="spouse_designation" class="form-group required">
                        <label for="spousedesignation" class="control-label col-md-4"> Spouse's
                            Designation.
                           </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="spousedesignation" name="spousedesignation"
                                   placeholder="spouse designation" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>

                    <div id="spouse_organization" class="form-group required">
                        <label for="spouseorganization" class="control-label col-md-4 "> Spouse's
                            Organization.
                           </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="spouseorganization"  name="spouseorganization"
                                   placeholder="Spouse's Organization" style="margin-bottom: 10px" type="text"/>
                        </div>
                    </div>


                    <table class="table table table-bordered">
                        <tbody>
                        <tr>
                            <td style="text-align: center;font-weight: bolder; " colspan="4">Children Information</td>
                        </tr>
                        <tr style="background-color: #caedfe">
                            <td>Sr.No.</td>
                            <td>Name</td>
                            <td>Gender</td>
                            <td>Age in years</td>

                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>
                                <input name="child[]" type="text" class="form-control"/>
                            </td>

                            <td>
                                <select name="child[]" class="form-control">
                                    <option value="-1">--Select Gender--</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>

                            </td>
                            <td><input name="child[]" type="number" class="form-control"/></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="panel-heading">
                        <div class="panel-title"><h3>Qualifications</h3></div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>
                    </div>
                    <div id="highest_qualify" class="form-group required">
                        <label class="control-label col-md-4  requiredField"> Highest Qualification in Subject Applied
                            as Preference 1:
                            <span class="asteriskField">*</span> </label>
                        <label>
                            <select name="highest_qualification" class="form-control" required>
                                <option value="-1">--SELECT--</option>
                                <option value="ECCE/NTT">ECCE/NTT</option>
                                <option value="Graduation">Graduation</option>
                                <option value="Post-Graduation">Post-Graduation</option>
                                <option value="M.Phil">M.Phil</option>
                                <option value="Doctorate">Doctorate</option>
                                <option value="Post-Doctorate">Post-Doctorate</option>
                                <option value="Other">Other</option>
                            </select>
                        </label>
                    </div>

                    <div id="b_ed" class="form-group required">
                        <label class="control-label col-md-4  requiredField"> Professional Training
                            <span class="asteriskField">*</span> </label>
                        <label>
                            <select name="professional_training" class="form-control" required>
                                <option value="-1">--SELECT--</option>
                                <option value="B.Ed">B.Ed</option>
                                <option value="M.Ed"> M.Ed</option>
                                <option value="D.Ed">D.Ed</option>
                                <option value="D.T.Ed">D.T.Ed</option>
                                <option value="D.El.Ed">D.El.Ed</option>
                                <option value="Montessori">Montessori</option>
                                <option value="NIOS">NIOS</option>
                                <option value="Others">Others</option>
                            </select>
                        </label>
                    </div>


                    <table class="table table table-bordered">
                        <tbody>
                        <tr>
                            <td style="text-align: center;font-weight: bolder; " colspan="7">Academic/Professional Qualifications</td>
                        </tr>
                        <tr style="background-color: #caedfe">
                            <td align="center" style="border: 1px solid #afafaf;">Qualification
                            </td>
                            <td align="center"
                                style="border: 1px solid #afafaf;">
                                Main Subjects</td>
                            <td align="center" style="border: 1px solid #afafaf;">School/ College</td>
                            <td align="center" style="border: 1px solid #afafaf;">Board/ University</td>
                            <td align="center" style="border: 1px solid #afafaf;">Year of Passing</td>
                            <td align="center" style="border: 1px solid #afafaf;">Percentage of Marks</td>
                            <td align="center" style="border: 1px solid #afafaf;">Division</td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">High School/10th
                            </td>
                            <td>
                                <input type="text" id="subjects_1" name="highschool[]" class="form-control"></td>
                            <td>
                                <input type="text" name="highschool[]" value="" class="form-control"></td>
                            <td>
                                <input type="text" name="highschool[]" value="" class="form-control"></td>
                            <td>
                                <input type="text" name="highschool[]" value="" class="form-control"></td>
                            <td>
                                <input name="highschool[]" type="text" maxlength="4" class="form-control"></td>
                            <td>
                                <select name="highschool[]" id="division_1">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">Inter/+2
                            </td>
                            <td>
                                <input type="text" id="subjects_2" name="inter[]" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="inter[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="inter[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="inter[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="inter[]" type="text" maxlength="4" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <select name="inter[]" id="division_2">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">Graduation
                            </td>
                            <td>
                                <input type="hidden" name="qualification_id_5001" value="5001" style="width:100%;"
                                       class="text_upper">
                                <input type="text" id="subjects_5001" name="graduation[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="graduation[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="graduation[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="graduation[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="graduation[]" type="text" maxlength="4"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <select name="graduation[]" id="division_5001">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">Post Graduation
                            </td>
                            <td>
                                <input type="text" id="subjects_7" name="pg[]" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="pg[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="pg[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="pg[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="pg[]" type="text" maxlength="4" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <select name="pg[]" id="division_7">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td align="center" style="border: 1px solid #afafaf;">
                                M.Phil.
                            </td>
                            <td>
                                <input type="text" id="subjects_389" name="mphil[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="mphil[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="mphil[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="mphil[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="mphil[]" type="text" maxlength="4" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <select name="mphil[]" id="division_389">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">Ph.D.
                            </td>
                            <td>
                                <input type="text" id="subjects_173" name="phd[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="phd[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="phd[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="phd[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="phd[]" type="text" maxlength="4" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <select name="phd[]" id="division_173">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">B.Ed.
                            </td>
                            <td>
                                <input type="text" id="subjects_330" name="bed[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="bed[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="bed[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="bed[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="bed[]" type="text" maxlength="4" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <select name="bed[]" id="division_330">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td align="center" style="border: 1px solid #afafaf;">
                                M.Ed.
                            </td>
                            <td>
                                <input type="text" id="subjects_429" name="med[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="med[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="med[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="med[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="med[]" type="text" maxlength="4" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <select name="med[]" id="division_429">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;">CTET
                            </td>
                            <td>
                                <input type="text" id="subjects_5005" name="ctet[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="ctet[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="ctet[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="ctet[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input name="ctet[]" type="text" maxlength="4"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <select name="ctet[]" id="division_5005">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td align="center" style="border: 1px solid #afafaf;">
                                Any Other
                            </td>
                            <td>
                                <input type="text" id="subjects_5006" name="otherq[]"
                                       class="form-control" style="width:100%;"></td>
                            <td>
                                <input type="text" name="otherq[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="otherq[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="text" name="otherq[]" value="" class="form-control"
                                       style="width:100%;"></td>
                            <td>
                                <input type="percantage_5006" name="otherq[]" value=""
                                       class="form-control" maxlength="4" style="width:100%;"></td>
                            <td>
                                <select name="otherq[]" id="division_5006">
                                    <option value="NA">--Select--</option>
                                    <option value="First">FIRST</option>
                                    <option value="Second">SECOND</option>
                                    <option value="Third">THIRD</option>
                                    <option value="NA">NA</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <!-- Moved the years of work experiece to inside the table
                    <div style="margin-top: 20px;" class="form-group required">
                        <label for="years_work_exp" class="control-label col-md-4  requiredField">Years of work experience
                            <span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="years_work_exp"
                                   placeholder="Years of work experience" style="margin-bottom: 10px" type="number"/>
                        </div>
                    </div>
                    -->

                    <table class="table table table-bordered">
                        <tbody>
                        <tr>
                            <td style="text-align: center;font-weight: bolder; " colspan="6">Experience Details</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;font-weight: bolder; " colspan="6">
                                <div style="margin-top: 20px;" class="form-group required">
                                    <label for="years_work_exp" class="control-label col-md-4  requiredField">Years of work experience
                                        <span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md emailinput form-control" id="years_work_exp" name="exp_years"
                                               placeholder="Years of work experience" style="margin-bottom: 10px" type="number" required/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="background-color: #caedfe;">
                            <td align="center"  style="border: 1px solid #afafaf;"> Sr.No.</td>
                            <td align="center" style="border: 1px solid #afafaf;">Start Date</td>
                            <td align="center" style="border: 1px solid #afafaf;">End Date</td>
                            <td align="center" style="border: 1px solid #afafaf;">Organization</td>
                            <td align="center" style="border: 1px solid #afafaf;">Role</td>
                            <td align="center" style="border: 1px solid #afafaf;">Remark</td>

                        </tr>
                        <tr>
                            <td style="background-color: #fffdfd;">1.</td>
                            <td><input name="exp[]" type="date" class="form-control"/></td>
                            <td><input name="exp[]" type="date" class="form-control"/></td>
                            <td><input name="exp[]" type="text" class="form-control"/></td>
                            <td><input name="exp[]" type="text" class="form-control"/></td>
                            <td><input name="exp[]" type="text" class="form-control"/></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table table-bordered">
                        <tbody>
                        <tr>
                            <td style="text-align: center;font-weight: bolder;" colspan="4">Languages Known</td>
                        </tr>
                        <tr style="background: #caedfe">
                            <td align="center" style="border: 1px solid #afafaf;">
                                Language
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;">
                                Speak
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;">
                                Read
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;">
                                Write
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="hidden" name="language_1" id="language_1" value="English" style="width:100%;" class="text_upper">
                                English
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="checkbox" class="mandatoryvalue" name="speak[]" value="english" id="speak_1">
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="checkbox" class="mandatoryvalue" name="read[]" value="english" id="read_1">
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="checkbox" class="mandatoryvalue" name="write[]" id="write_1" value="english">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="hidden" name="language_2" id="language_2" value="Hindi" style="width:100%;" class="text_upper">
                                Hindi
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px">
                                <input class="mandatoryvalue text_upper" type="checkbox" value="hindi" name="speak[]" id="speak_2">
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="checkbox" name="read[]" class="mandatoryvalue text_upper" id="read_2" value="hindi">
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px;">
                                <input type="checkbox" class="mandatoryvalue" name="write[]" id="write_2" value="hindi">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px">
                                <input type="hidden" value="Tamil" style="width:100%;" class="text_upper">
                                Tamil
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px">
                                <input class="mandatoryvalue" type="checkbox" name="speak[]" id="__ufdkey__Tamil_Language_Speak" value="tamil">
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px">
                                <input type="checkbox" class="mandatoryvalue" name="read[]" id="__ufdkey__Tamil_Language_Read" value="tamil">
                            </td>
                            <td align="center" style="border: 1px solid #afafaf;padding-top: 2px; padding-bottom: 2px">
                                <input type="checkbox" class="mandatoryvalue" name="write[]" id="__ufdkey__Tamil_Language_Write" value="tamil">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>

                    <table class="table table table-bordered">
                        <tbody>
                        <tr>
                            <td style="text-align: center;font-weight: bolder; " colspan="6">Awards/Certification fields</td>
                        </tr>
                        <tr style="background: #91ddff;">
                            <td>Award_No</td>
                            <td>Award Name</td>
                            <td>Award Organization</td>
                            <td>Year</td>
                            <td>Remarks</td>

                        </tr>
                        <tr>
                            <td style="background-color: #fffdfd;">1.</td>
                            <td><input name="award[]" type="text" class="form-control"/></td>
                            <td><input name="award[]" type="text" class="form-control"/></td>
                            <td><input name="award[]" type="text" class="form-control"/></td>
                            <td><input name="award[]" type="text" class="form-control"/></td>
                        </tr>

                        </tbody>
                    </table>

                    <br>
                    <div id="pref_computer" class="form-group required">
                        <label for="street_name" class="control-label col-md-4  requiredField">Proficiency in Computer<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="computer_pref" name="computer_pref"
                                   placeholder="Describe your computer skills " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="non_academic_interest" class="control-label col-md-4  requiredField">Non Academic Interests<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="non_academic_interest" name="non_academic"
                                   placeholder="Please list your non-academic interests" style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <table class="table table table-bordered">
                        <tbody>
                        <tr>
                            <td style="text-align: center;font-weight: bolder; " colspan="5">References</td>
                        </tr>
                        <tr style="background: #91ddff;">
                            <td>Ref.No.</td>
                            <td>Name</td>
                            <td>Designation</td>
                            <td>Address</td>
                            <td>Contact info</td>

                        </tr>
                        <tr>
                            <td style="background-color: #fffdfd;">1.</td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td style="background-color: #fffdfd;">2.</td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                            <td><input name="ref[]" type="text" class="form-control"/></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group required">
                        <label for="description" class="control-label col-md-4  requiredField">Job Expectation and Contributions<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <textarea class="input-md emailinput form-control" id="description" name="description"
                                      placeholder="Briefly describe your expectation for this role and how you hope to contribute" style="margin-bottom: 10px" required ></textarea>
                        </div>
                    </div>

                    <div id="criminal_conviction" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">Criminal Conviction<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select name="criminal_conviction" class="form-control" style="margin-bottom: 10px" required>
                                <option value="-1">--Have you ever been convicted of a Criminal Offense--</option>
                                <option value="yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="work_rights" class="control-label col-md-4  requiredField">Work Rights<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="work_rights" name="work_rights"
                                   placeholder="Are there any restrictions on your right to work in India? " style="margin-bottom: 10px" type="text" required/>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="street_name" class="control-label col-md-4  requiredField"> Upload Cover Letter (optional) </label>
                        <div class="controls col-md-8 ">
                            <input class="filesize mandatoryvalue fileext" ext="pdf,doc,docx" type="file" name="cover_letter" title="Upload covet letter" edu_file_size="1024" id="cover_letter" style="width:746px;"/>
                            (File size < 2 MB)
                        </div>
                    </div>

                    <div id="photo_" class="form-group required">
                        <label for="street_name" class="control-label col-md-4  requiredField"> Upload Passport Size Photograph (JPG/PNG)<span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="filesize mandatoryvalue fileext" accept="image/jpx" type="file" name="resume" title="Upload Photograph" edu_file_size="1024" id="photo" style="width:746px;"/>
                            (File size < 4 MB)
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="street_name" class="control-label col-md-4  requiredField"> Resume <span
                                    class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="filesize mandatoryvalue fileext" ext="pdf,doc,docx" type="file" name="resume" title="Upload Resume with Photograph" edu_file_size="1024" id="sign" style="width:746px;"/>
                            (File size < 2 MB)
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls col-md-offset-4 col-md-8 ">
                            <div id="div_id_terms" class="checkbox required">
                                <label for="id_terms" class=" requiredField">
                                    <input class="input-ms checkboxinput" id="id_terms" name="terms"
                                           style="margin-bottom: 10px" type="checkbox"/>
                                    I, the applicant, state that all information given above is true and correct. I understand that submission of the Application Form is a preliminary step in the selection of teachers at Jay International School and does not guarantee a job.
                                    <br>I agree to abide by all decisions taken by the school management.
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                            <input type="submit" name="Signup" value="Submit" class="btn btn-primary btn btn-info"
                                   id="submit-id-signup"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button{
        -webkit-appearance:none;
    }
    input[type="number"]{
        -moz-appearance:textfield;
    }
</style>

