
@extends('layouts.app')

@section('content')

<div className="contact" style="height: 100vh;">
    <div class="row">
        <div class="col-4">
            <img src="../assets/for_buy.jpg" alt="" style="height: 100vh;
            width: 33vw;">
        </div>
      
        {{-- <div class="col-4" style="padding: 50px;"> --}}
           
            {{-- <h3>Contact Us</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <form role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control"> 
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                               </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="control-label">Phone</label>
                                        <input type="tel" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">Nationality</label>
                                        <select name="nationality" class="form-control selectpicker">
                                            <option value="">Please select your nationality</option>
                                            <option>Afghan</option>
                                            <option>Albanian</option>
                                            <option>Algerian</option>
                                            <option>American</option>
                                            <option>Andorran</option>
                                            <option>Angolan</option>
                                            <option>Antiguans</option>
                                            <option>Argentinian</option>
                                            <option>Armenian</option>
                                            <option>Australian</option>
                                            <option>Austrian</option>
                                            <option>Azerbaijani</option>
                                            <option>Bahamian</option>
                                            <option>Bahraini</option>
                                            <option>Bangladeshi</option>
                                            <option>Barbadian</option>
                                            <option>Barbudans</option>
                                            <option>Botswana</option>
                                            <option>Belarussian</option>
                                            <option>Belgian</option>
                                            <option>Belizean</option>
                                            <option>Beninese</option>
                                            <option>Bhutanese</option>
                                            <option>Bolivian</option>
                                            <option>Bosnian</option>
                                            <option>Brazilian</option>
                                            <option>British</option>
                                            <option>Bruneian</option>
                                            <option>Bulgarian</option>
                                            <option>Burkinabe</option>
                                            <option>Burmese</option>
                                            <option>Burundian</option>
                                            <option>Cambodian</option>
                                            <option>Cameroonian</option>
                                            <option>Canadian</option>
                                            <option>Cape Verdean</option>
                                            <option>Central African</option>
                                            <option>Chadian</option>
                                            <option>Chilean</option>
                                            <option>Chinese</option>
                                            <option>Colombian</option>
                                            <option>Comoran</option>
                                            <option>Congolese</option>
                                            <option>Costa Rican</option>
                                            <option>Croatian</option>
                                            <option>Cuban</option>
                                            <option>Cypriot</option>
                                            <option>Czech</option>
                                            <option>Danish</option>
                                            <option>Djibouti</option>
                                            <option>Dominican</option>
                                            <option>Dutch</option>
                                            <option>East Timorese</option>
                                            <option>Ecuadorean</option>
                                            <option>Egyptian</option>
                                            <option>Emirati</option>
                                            <option>Equatorial Guinean</option>
                                            <option>Eritrean</option>
                                            <option>Estonian</option>
                                            <option>Ethiopian</option>
                                            <option>Fijian</option>
                                            <option>Filipino</option>
                                            <option>Finnish</option>
                                            <option>French</option>
                                            <option>Gabonese</option>
                                            <option>Gambian</option>
                                            <option>Georgian</option>
                                            <option>German</option>
                                            <option>Ghanaian</option>
                                            <option>Greek</option>
                                            <option>Grenadian</option>
                                            <option>Guatemalan</option>
                                            <option>Guinea-Bissauan</option>
                                            <option>Guinean</option>
                                            <option>Guyanese</option>
                                            <option>Haitian</option>
                                            <option>Honduran</option>
                                            <option>Hungarian</option>
                                            <option>Icelander</option>
                                            <option>Indian</option>
                                            <option>Indonesian</option>
                                            <option>Iranian</option>
                                            <option>Iraqi</option>
                                            <option>Irish</option>
                                            <option>Israeli</option>
                                            <option>Italian</option>
                                            <option>Ivorian</option>
                                            <option>Jamaican</option>
                                            <option>Japanese</option>
                                            <option>Jordanian</option>
                                            <option>Kazakhstani</option>
                                            <option>Kenyan</option>
                                            <option>Kiribati</option>
                                            <option>Kittian and Nevisian</option>
                                            <option>Kuwaiti</option>
                                            <option>Kyrgyz</option>
                                            <option>Laotian</option>
                                            <option>Latvian</option>
                                            <option>Lebanese</option>
                                            <option>Liberian</option>
                                            <option>Libyan</option>
                                            <option>Liechtensteiner</option>
                                            <option>Lithuanian</option>
                                            <option>Luxembourger</option>
                                            <option>Macedonian</option>
                                            <option>Malagasy</option>
                                            <option>Malawian</option>
                                            <option>Malaysian</option>
                                            <option>Maldivan</option>
                                            <option>Malian</option>
                                            <option>Maltese</option>
                                            <option>Marshallese</option>
                                            <option>Mauritanian</option>
                                            <option>Mauritian</option>
                                            <option>Mexican</option>
                                            <option>Micronesian</option>
                                            <option>Moldovan</option>
                                            <option>Monacan</option>
                                            <option>Mongolian</option>
                                            <option>Moroccan</option>
                                            <option>Mosotho</option>
                                            <option>Motswana</option>
                                            <option>Mozambican</option>
                                            <option>Namibian</option>
                                            <option>Nauruan</option>
                                            <option>Nepalese</option>
                                            <option>New Zealander</option>
                                            <option>Nicaraguan</option>
                                            <option>Nigerian</option>
                                            <option>North Korean</option>
                                            <option>Norwegian</option>
                                            <option>Omani</option>
                                            <option>Pakistani</option>
                                            <option>Palauan</option>
                                            <option>Panamanian</option>
                                            <option>Papua New Guinean</option>
                                            <option>Paraguayan</option>
                                            <option>Peruvian</option>
                                            <option>Polish</option>
                                            <option>Portuguese</option>
                                            <option>Qatari</option>
                                            <option>Romanian</option>
                                            <option>Russian</option>
                                            <option>Rwandan</option>
                                            <option>St. Lucian</option>
                                            <option>Salvadoran</option>
                                            <option>Samoan</option>
                                            <option>San Marinese</option>
                                            <option>Sao Tomean</option>
                                            <option>Saudi</option>
                                            <option>Senegalese</option>
                                            <option>Serbian</option>
                                            <option>Seychellois</option>
                                            <option>Sierra Leonean</option>
                                            <option>Singaporean</option>
                                            <option>Slovakian</option>
                                            <option>Slovenian</option>
                                            <option>Solomon Islander</option>
                                            <option>Somali</option>
                                            <option>South African</option>
                                            <option>South Korean</option>
                                            <option>Spanish</option>
                                            <option>Sri Lankan</option>
                                            <option>Sudanese</option>
                                            <option>Surinamer</option>
                                            <option>Swazi</option>
                                            <option>Swedish</option>
                                            <option>Swiss</option>
                                            <option>Syrian</option>
                                            <option>Taiwanese</option>
                                            <option>Tajik</option>
                                            <option>Tanzanian</option>
                                            <option>Thai</option>
                                            <option>Togolese</option>
                                            <option>Tongan</option>
                                            <option>Trinidadian</option>
                                            <option>Tunisian</option>
                                            <option>Turkish</option>
                                            <option>Tuvaluan</option>
                                            <option>Ugandan</option>
                                            <option>Ukrainian</option>
                                            <option>Uruguayan</option>
                                            <option>Uzbekistani</option>
                                            <option>Venezuelan</option>
                                            <option>Vietnamese</option>
                                            <option>West Indian</option>
                                            <option>Yemenite</option>
                                            <option>Zambian</option>
                                            <option>Zimbabwean</option>
                                       </select>
                                  </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="row">
                                 <div class="col-sm-12">
                                     <label class="control-label">Message</label>
                                     <textarea id="message" class="form-control" rows="5" name="message"></textarea>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                                <br>
                                 <div class="col-sm-6">
                                     <button class="btn">Send</button>
                                 </div>
                          
                         </div>
                    </form>
    
                    </div>
                </div>			
            </div>
        </div> --}}


        <div class="col-4" style="padding: 50px;">
            <div class="container">
                <h1>Contact Us</h1>
                <form action="" method="">
                    <label>Name</label>
                    <input type="text" class="form-control shadow" style="background-color: #fff;" name="name" id="">
                    <label>Email</label>
                    <input type="text" class="form-control shadow" style="background-color: #fff;"name="name" id="">
                    <label>Phone</label>
                    <input type="text" class="form-control shadow" style="background-color: #fff;" name="name" id="">
                    <label>Nationality</label>
                    <select name="nationality" class="form-control shadow selectpicker" style="background-color: #fff;">
                        <option value="">Please select your nationality</option>
                        <option>Afghan</option>
                        <option>Albanian</option>
                        <option>Algerian</option>
                        <option>American</option>
                        <option>Andorran</option>
                        <option>Angolan</option>
                        <option>Antiguans</option>
                        <option>Argentinian</option>
                        <option>Armenian</option>
                        <option>Australian</option>
                        <option>Austrian</option>
                        <option>Azerbaijani</option>
                        <option>Bahamian</option>
                        <option>Bahraini</option>
                        <option>Bangladeshi</option>
                        <option>Barbadian</option>
                        <option>Barbudans</option>
                        <option>Botswana</option>
                        <option>Belarussian</option>
                        <option>Belgian</option>
                        <option>Belizean</option>
                        <option>Beninese</option>
                        <option>Bhutanese</option>
                        <option>Bolivian</option>
                        <option>Bosnian</option>
                        <option>Brazilian</option>
                        <option>British</option>
                        <option>Bruneian</option>
                        <option>Bulgarian</option>
                        <option>Burkinabe</option>
                        <option>Burmese</option>
                        <option>Burundian</option>
                        <option>Cambodian</option>
                        <option>Cameroonian</option>
                        <option>Canadian</option>
                        <option>Cape Verdean</option>
                        <option>Central African</option>
                        <option>Chadian</option>
                        <option>Chilean</option>
                        <option>Chinese</option>
                        <option>Colombian</option>
                        <option>Comoran</option>
                        <option>Congolese</option>
                        <option>Costa Rican</option>
                        <option>Croatian</option>
                        <option>Cuban</option>
                        <option>Cypriot</option>
                        <option>Czech</option>
                        <option>Danish</option>
                        <option>Djibouti</option>
                        <option>Dominican</option>
                        <option>Dutch</option>
                        <option>East Timorese</option>
                        <option>Ecuadorean</option>
                        <option>Egyptian</option>
                        <option>Emirati</option>
                        <option>Equatorial Guinean</option>
                        <option>Eritrean</option>
                        <option>Estonian</option>
                        <option>Ethiopian</option>
                        <option>Fijian</option>
                        <option>Filipino</option>
                        <option>Finnish</option>
                        <option>French</option>
                        <option>Gabonese</option>
                        <option>Gambian</option>
                        <option>Georgian</option>
                        <option>German</option>
                        <option>Ghanaian</option>
                        <option>Greek</option>
                        <option>Grenadian</option>
                        <option>Guatemalan</option>
                        <option>Guinea-Bissauan</option>
                        <option>Guinean</option>
                        <option>Guyanese</option>
                        <option>Haitian</option>
                        <option>Honduran</option>
                        <option>Hungarian</option>
                        <option>Icelander</option>
                        <option>Indian</option>
                        <option>Indonesian</option>
                        <option>Iranian</option>
                        <option>Iraqi</option>
                        <option>Irish</option>
                        <option>Israeli</option>
                        <option>Italian</option>
                        <option>Ivorian</option>
                        <option>Jamaican</option>
                        <option>Japanese</option>
                        <option>Jordanian</option>
                        <option>Kazakhstani</option>
                        <option>Kenyan</option>
                        <option>Kiribati</option>
                        <option>Kittian and Nevisian</option>
                        <option>Kuwaiti</option>
                        <option>Kyrgyz</option>
                        <option>Laotian</option>
                        <option>Latvian</option>
                        <option>Lebanese</option>
                        <option>Liberian</option>
                        <option>Libyan</option>
                        <option>Liechtensteiner</option>
                        <option>Lithuanian</option>
                        <option>Luxembourger</option>
                        <option>Macedonian</option>
                        <option>Malagasy</option>
                        <option>Malawian</option>
                        <option>Malaysian</option>
                        <option>Maldivan</option>
                        <option>Malian</option>
                        <option>Maltese</option>
                        <option>Marshallese</option>
                        <option>Mauritanian</option>
                        <option>Mauritian</option>
                        <option>Mexican</option>
                        <option>Micronesian</option>
                        <option>Moldovan</option>
                        <option>Monacan</option>
                        <option>Mongolian</option>
                        <option>Moroccan</option>
                        <option>Mosotho</option>
                        <option>Motswana</option>
                        <option>Mozambican</option>
                        <option>Namibian</option>
                        <option>Nauruan</option>
                        <option>Nepalese</option>
                        <option>New Zealander</option>
                        <option>Nicaraguan</option>
                        <option>Nigerian</option>
                        <option>North Korean</option>
                        <option>Norwegian</option>
                        <option>Omani</option>
                        <option>Pakistani</option>
                        <option>Palauan</option>
                        <option>Panamanian</option>
                        <option>Papua New Guinean</option>
                        <option>Paraguayan</option>
                        <option>Peruvian</option>
                        <option>Polish</option>
                        <option>Portuguese</option>
                        <option>Qatari</option>
                        <option>Romanian</option>
                        <option>Russian</option>
                        <option>Rwandan</option>
                        <option>St. Lucian</option>
                        <option>Salvadoran</option>
                        <option>Samoan</option>
                        <option>San Marinese</option>
                        <option>Sao Tomean</option>
                        <option>Saudi</option>
                        <option>Senegalese</option>
                        <option>Serbian</option>
                        <option>Seychellois</option>
                        <option>Sierra Leonean</option>
                        <option>Singaporean</option>
                        <option>Slovakian</option>
                        <option>Slovenian</option>
                        <option>Solomon Islander</option>
                        <option>Somali</option>
                        <option>South African</option>
                        <option>South Korean</option>
                        <option>Spanish</option>
                        <option>Sri Lankan</option>
                        <option>Sudanese</option>
                        <option>Surinamer</option>
                        <option>Swazi</option>
                        <option>Swedish</option>
                        <option>Swiss</option>
                        <option>Syrian</option>
                        <option>Taiwanese</option>
                        <option>Tajik</option>
                        <option>Tanzanian</option>
                        <option>Thai</option>
                        <option>Togolese</option>
                        <option>Tongan</option>
                        <option>Trinidadian</option>
                        <option>Tunisian</option>
                        <option>Turkish</option>
                        <option>Tuvaluan</option>
                        <option>Ugandan</option>
                        <option>Ukrainian</option>
                        <option>Uruguayan</option>
                        <option>Uzbekistani</option>
                        <option>Venezuelan</option>
                        <option>Vietnamese</option>
                        <option>West Indian</option>
                        <option>Yemenite</option>
                        <option>Zambian</option>
                        <option>Zimbabwean</option>
                   </select>
                <label>Message</label>
                <textarea class="form-control shadow" style="background-color: #fff; color: #000;" name="" id="" cols="30" rows="10" placeholder="Type Message">
                </textarea>
                <br>
                <button type="button" style="height: 3rem; width: 10vw;background-color:#368D96; border:none; border-radius: 8px; color: #fff; font-size:20px;">Send</button>
              
                </form>
              <br>
            </div>
        </div>

        <div class="col-4" style="padding: 50px;">
            {{-- <br> <br> --}}
            <h1>Get in Touch!</h1>
            <p>
              We are happy to serve you at all times! Thanks to our " <b>Customer First</b>
              " service policy. Your success is our success.  We really appreciate if you can send us your details for our records to ensure we don't miss your query.  Your data will be handled  with utmost privacy according to Republic Act 10173, known as the Data Privacy Act of 2012, and will be used only for the purpose it is intended for.
            </p>
            <p>        
              For urgent needs, you may call our Sales directly to address your inquiry or you can chat with our customer representative
            </p>

            <div className="googlemap">       
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62997.314665386555!2d123.24978223618496!3d9.303807004026414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab6f392de360b7%3A0x2d6945df4760769!2sDumaguete%20City%2C%20Negros%20Oriental!5e0!3m2!1sen!2sph!4v1662435553847!5m2!1sen!2sph" width="100%" height="450" style="border:0;margin-left:auto; margin-right:auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </div>

    </div>
     
</div>

  @endsection