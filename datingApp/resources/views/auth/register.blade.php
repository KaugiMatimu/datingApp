@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <div class="container registration-container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="registration-card shadow">
                    <div class="registration-header">
                        <h2>Create Your Account</h2>
                        <p class="text-muted">Join our community in just a few steps</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="registration-form">
                        @csrf

                        <div class="form-section">
                            <h4 class="section-title">Basic Information</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group floating-label">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                               name="name" value="{{ old('name') }}" required autocomplete="name" placeholder=" ">
                                        <label for="name">{{ __('First Name') }}</label>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group floating-label">
                                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" 
                                               name="surname" value="{{ old('surname') }}" required placeholder=" ">
                                        <label for="surname">{{ __('Last Name') }}</label>
                                        @error('surname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group floating-label">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                               name="email" value="{{ old('email') }}" required placeholder=" ">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group floating-label">
                                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                               name="phone" value="{{ old('phone') }}" required placeholder=" ">
                                        <label for="phone">{{ __('Phone Number') }}</label>
                                        @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group floating-label">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                               name="password" required placeholder=" ">
                                        <label for="password">{{ __('Password') }}</label>
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group floating-label">
                                        <input id="password-confirm" type="password" class="form-control" 
                                               name="password_confirmation" required placeholder=" ">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h4 class="section-title">Personal Details</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Age') }}</label>
                                        <input type="text" class="js-range-slider" name="age" id="age" value=""
                                               data-type="single"
                                               data-min="18"
                                               data-max="100"
                                               data-from="25"
                                               data-grid="true"
                                               data-skin="round">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Gender') }}</label>
                                        <div class="gender-selector">
                                            <div class="gender-option">
                                                <input type="radio" name="gender" id="male" value="male" class="gender-input">
                                                <label for="male" class="gender-label">
                                                    <i class="fas fa-mars"></i> Male
                                                </label>
                                            </div>
                                            <div class="gender-option">
                                                <input type="radio" name="gender" id="female" value="female" class="gender-input">
                                                <label for="female" class="gender-label">
                                                    <i class="fas fa-venus"></i> Female
                                                </label>
                                            </div>
                                        </div>
                                        @error('gender')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Country') }}</label>
                                        <select class="form-select" id="country" name="country">
                                            <option value="" disabled selected>Select your country</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Relationship Status') }}</label>
                                        <select class="form-select" id="relationship" name="relationship">
                                            <option value="" disabled selected>Select status</option>
                                            <option value="Single">Single</option>
                                            <option value="Taken">Taken</option>
                                            <option value="Married">Married</option>
                                            <!-- Other options... -->
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">{{ __('About You') }}</label>
                                <textarea class="form-control bio-textarea" id="description" name="description" rows="3"
                                          placeholder="Tell us about yourself...">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">{{ __('Languages You Speak') }}</label>
                                <textarea class="form-control bio-textarea" id="languages" name="languages" rows="2"
                                          placeholder="English, Spanish, French...">{{ old('languages') }}</textarea>
                                @error('languages')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-section">
                            <h4 class="section-title">Partner Preferences</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Age Range') }}</label>
                                        <input type="text" class="js-range-slider" name="search_age_range" id="search_age_range"
                                               value=""
                                               data-type="double"
                                               data-min="18"
                                               data-max="100"
                                               data-from="25"
                                               data-to="45"
                                               data-grid="true"
                                               data-skin="round">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Interested In') }}</label>
                                        <div class="preference-selector">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="search_male"
                                                       id="search_male" value="1" checked>
                                                <label class="form-check-label" for="search_male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="search_female"
                                                       id="search_female" value="1" checked>
                                                <label class="form-check-label" for="search_female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-register">
                                {{ __('Create Account') }} <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                            <p class="terms-notice mt-3">
                                By registering, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary-color: #6c5ce7;
            --secondary-color: #a29bfe;
            --dark-color: #2d3436;
            --light-color: #f5f6fa;
            --success-color: #00b894;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
        }
        
        .registration-container {
            padding: 2rem 0;
        }
        
        .registration-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            border: none;
        }
        
        .registration-header {
            padding: 2rem;
            text-align: center;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }
        
        .registration-header h2 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .registration-form {
            padding: 2rem;
        }
        
        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .form-section:last-child {
            border-bottom: none;
        }
        
        .section-title {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 1.5rem;
            position: relative;
            padding-left: 1rem;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 70%;
            width: 4px;
            background: var(--primary-color);
            border-radius: 4px;
        }
        
        .floating-label {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .floating-label input, 
        .floating-label select,
        .floating-label textarea {
            height: 50px;
            padding: 1rem 0.75rem 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            width: 100%;
            transition: all 0.2s;
        }
        
        .floating-label textarea {
            height: auto;
            min-height: 100px;
            padding-top: 1.5rem;
        }
        
        .floating-label label {
            position: absolute;
            top: 15px;
            left: 12px;
            color: #777;
            transition: all 0.2s;
            pointer-events: none;
        }
        
        .floating-label input:focus,
        .floating-label select:focus,
        .floating-label textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.1);
            outline: none;
        }
        
        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label,
        .floating-label select:focus + label,
        .floating-label select:not([value=""]) + label,
        .floating-label textarea:focus + label,
        .floating-label textarea:not(:placeholder-shown) + label {
            top: 6px;
            left: 12px;
            font-size: 0.75rem;
            color: var(--primary-color);
            background: white;
            padding: 0 4px;
        }
        
        .gender-selector {
            display: flex;
            gap: 1rem;
        }
        
        .gender-option {
            flex: 1;
        }
        
        .gender-input {
            display: none;
        }
        
        .gender-label {
            display: block;
            padding: 0.75rem 1rem;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .gender-input:checked + .gender-label {
            border-color: var(--primary-color);
            background-color: rgba(108, 92, 231, 0.1);
            color: var(--primary-color);
        }
        
        .gender-label i {
            margin-right: 0.5rem;
        }
        
        .btn-register {
            background: var(--primary-color);
            border: none;
            padding: 0.75rem 2.5rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 50px;
            color: white;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(108, 92, 231, 0.3);
        }
        
        .btn-register:hover {
            background: #5649d1;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 92, 231, 0.4);
        }
        
        .terms-notice {
            font-size: 0.85rem;
            color: #666;
        }
        
        .terms-notice a {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .invalid-feedback {
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }
        
        .bio-textarea {
            min-height: 100px;
            border-radius: 8px;
            resize: vertical;
        }
        
        /* Range slider customization */
        .irs--round .irs-bar {
            background: var(--primary-color);
        }
        
        .irs--round .irs-handle {
            border: 4px solid var(--primary-color);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .gender-selector {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .registration-form {
                padding: 1.5rem;
            }
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
            $(".js-range-slider").ionRangeSlider({
                skin: "round",
                hide_min_max: true,
                hide_from_to: false
            });
            
            // Initialize floating labels
            $('.floating-label input, .floating-label select, .floating-label textarea').each(function() {
                if ($(this).val() !== '') {
                    $(this).next('label').addClass('active');
                }
            });
        });
    </script>
@endsection