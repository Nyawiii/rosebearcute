<div>
    <form class="container order-form-container">
    <div id="payment-steps" class="payment-steps">
        <div class="payment-steps__left-col">
            <section class="scroll-to-block">
                <div class="step">
                <div class="step__number">Step 1:</div>
                <div class="step__title">Select Order Quantity</div>
                </div>
                <div class="quantity-chooser no-installment">
                <div class="products" id="products"></div>
                
                </div>
                
            </section>
            
        </div>
        <div class="payment-steps__right-col">
            <section class="scroll-to-block  block-with-shadow">
                <div class="step step--payment-method">
                <div class="step__number">Step 2:</div>
                <div class="step__title">Payment Method</div>
                </div>
                <div class="payment-methods">
                <div class="payment-method payment-method--selected">
                    <div class="radio radio--selected">
                        <div class="radio__inner">
                             
                            <ul class="card-types">
                            <li>
                                <img src="/assets/img/visa.svg" alt="Visa">     
                            </li>
                            <li>
                                 <img src="/assets/img/mastercard.svg" alt="MasterCard">    
                            </li>
                            <li>
                                   <img src="/assets/img/maestro.svg" alt="Maestro">  
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                 
        
                <form class="payment_form">
                    <div>
                         
                        <section class="scroll-to-block">
                            <div class="step">
                                <div class="step__number">Step 3:</div>
                                <div class="step__title">Contact Information</div>
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                <input placeholder="First Name" value="" field="input" type="text" name="first_name" id="firstname" autocomplete="given-name" class="form-field__input"> <label class="form-field__label">First Name</label> 
                                </div>
                                <div class="form-field">
                                <input placeholder="Last Name" value="" field="input" type="text" name="last_name" id="lastname" autocomplete="family-name" class="form-field__input"> <label class="form-field__label">Last Name</label> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                <input placeholder="Email" value="" field="input" type="text" name="email" id="email" class="form-field__input"> <label class="form-field__label">Email</label> 
                                </div>
                                <div class="form-field">
                                <div class="form-input phone-is-empty" name="phone" id="phone">
                                    <!-- <div class="iti iti--allow-dropdown">
                                        <div class="iti__flag-container">
                                            <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" aria-expanded="false" tabindex="0" title="Philippines: +63" aria-activedescendant="iti-item-ph">
                                            <div class="iti__flag iti__ph"></div>
                                            <div class="iti__arrow"></div>
                                            </div>
                                            <ul class="iti__country-list iti__hide" id="country-listbox" role="listbox">
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__al"></div>
                                                </div>
                                                <span class="iti__country-name">Albania</span><span class="iti__dial-code">+355</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__dz"></div>
                                                </div>
                                                <span class="iti__country-name">Algeria</span><span class="iti__dial-code">+213</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ad"></div>
                                                </div>
                                                <span class="iti__country-name">Andorra</span><span class="iti__dial-code">+376</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ao"></div>
                                                </div>
                                                <span class="iti__country-name">Angola</span><span class="iti__dial-code">+244</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ai" role="option" data-dial-code="1" data-country-code="ai">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ai"></div>
                                                </div>
                                                <span class="iti__country-name">Anguilla</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ag" role="option" data-dial-code="1" data-country-code="ag">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ag"></div>
                                                </div>
                                                <span class="iti__country-name">Antigua and Barbuda</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ar"></div>
                                                </div>
                                                <span class="iti__country-name">Argentina</span><span class="iti__dial-code">+54</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__am"></div>
                                                </div>
                                                <span class="iti__country-name">Armenia</span><span class="iti__dial-code">+374</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__aw"></div>
                                                </div>
                                                <span class="iti__country-name">Aruba</span><span class="iti__dial-code">+297</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__au"></div>
                                                </div>
                                                <span class="iti__country-name">Australia</span><span class="iti__dial-code">+61</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__at"></div>
                                                </div>
                                                <span class="iti__country-name">Austria</span><span class="iti__dial-code">+43</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__az"></div>
                                                </div>
                                                <span class="iti__country-name">Azerbaijan</span><span class="iti__dial-code">+994</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bh"></div>
                                                </div>
                                                <span class="iti__country-name">Bahrain</span><span class="iti__dial-code">+973</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bd"></div>
                                                </div>
                                                <span class="iti__country-name">Bangladesh</span><span class="iti__dial-code">+880</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bb" role="option" data-dial-code="1" data-country-code="bb">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bb"></div>
                                                </div>
                                                <span class="iti__country-name">Barbados</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__be"></div>
                                                </div>
                                                <span class="iti__country-name">Belgium</span><span class="iti__dial-code">+32</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bj"></div>
                                                </div>
                                                <span class="iti__country-name">Benin</span><span class="iti__dial-code">+229</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bm" role="option" data-dial-code="1" data-country-code="bm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bm"></div>
                                                </div>
                                                <span class="iti__country-name">Bermuda</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bt"></div>
                                                </div>
                                                <span class="iti__country-name">Bhutan</span><span class="iti__dial-code">+975</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__br"></div>
                                                </div>
                                                <span class="iti__country-name">Brazil</span><span class="iti__dial-code">+55</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-vg" role="option" data-dial-code="1" data-country-code="vg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__vg"></div>
                                                </div>
                                                <span class="iti__country-name">British</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bg"></div>
                                                </div>
                                                <span class="iti__country-name">Bulgaria</span><span class="iti__dial-code">+359</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__bf"></div>
                                                </div>
                                                <span class="iti__country-name">Burkina Faso</span><span class="iti__dial-code">+226</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cm"></div>
                                                </div>
                                                <span class="iti__country-name">Cameroon</span><span class="iti__dial-code">+237</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ca"></div>
                                                </div>
                                                <span class="iti__country-name">Canada</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ky" role="option" data-dial-code="1" data-country-code="ky">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ky"></div>
                                                </div>
                                                <span class="iti__country-name">Cayman Islands</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__td"></div>
                                                </div>
                                                <span class="iti__country-name">Chad</span><span class="iti__dial-code">+235</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cl"></div>
                                                </div>
                                                <span class="iti__country-name">Chile</span><span class="iti__dial-code">+56</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cn"></div>
                                                </div>
                                                <span class="iti__country-name">China</span><span class="iti__dial-code">+86</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cx"></div>
                                                </div>
                                                <span class="iti__country-name">Christmas Island</span><span class="iti__dial-code">+61</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__co"></div>
                                                </div>
                                                <span class="iti__country-name">Colombia</span><span class="iti__dial-code">+57</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__km"></div>
                                                </div>
                                                <span class="iti__country-name">Comoros</span><span class="iti__dial-code">+269</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cr"></div>
                                                </div>
                                                <span class="iti__country-name">Costa Rica</span><span class="iti__dial-code">+506</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__hr"></div>
                                                </div>
                                                <span class="iti__country-name">Croatia</span><span class="iti__dial-code">+385</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cy"></div>
                                                </div>
                                                <span class="iti__country-name">Cyprus</span><span class="iti__dial-code">+357</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__cz"></div>
                                                </div>
                                                <span class="iti__country-name">Czech Republic</span><span class="iti__dial-code">+420</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__dk"></div>
                                                </div>
                                                <span class="iti__country-name">Denmark</span><span class="iti__dial-code">+45</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__dj"></div>
                                                </div>
                                                <span class="iti__country-name">Djibouti</span><span class="iti__dial-code">+253</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-dm" role="option" data-dial-code="1" data-country-code="dm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__dm"></div>
                                                </div>
                                                <span class="iti__country-name">Dominica</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__eg"></div>
                                                </div>
                                                <span class="iti__country-name">Egypt</span><span class="iti__dial-code">+20</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sv"></div>
                                                </div>
                                                <span class="iti__country-name">El Salvador</span><span class="iti__dial-code">+503</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gq"></div>
                                                </div>
                                                <span class="iti__country-name">Equatorial Guinea</span><span class="iti__dial-code">+240</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ee"></div>
                                                </div>
                                                <span class="iti__country-name">Estonia</span><span class="iti__dial-code">+372</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__et"></div>
                                                </div>
                                                <span class="iti__country-name">Ethiopia</span><span class="iti__dial-code">+251</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__fk"></div>
                                                </div>
                                                <span class="iti__country-name">Falkland Islands</span><span class="iti__dial-code">+500</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__fo"></div>
                                                </div>
                                                <span class="iti__country-name">Faroe Islands</span><span class="iti__dial-code">+298</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__fi"></div>
                                                </div>
                                                <span class="iti__country-name">Finland</span><span class="iti__dial-code">+358</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__fr"></div>
                                                </div>
                                                <span class="iti__country-name">France</span><span class="iti__dial-code">+33</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gf"></div>
                                                </div>
                                                <span class="iti__country-name">French Guiana</span><span class="iti__dial-code">+594</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ga"></div>
                                                </div>
                                                <span class="iti__country-name">Gabon</span><span class="iti__dial-code">+241</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gm"></div>
                                                </div>
                                                <span class="iti__country-name">Gambia</span><span class="iti__dial-code">+220</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ge"></div>
                                                </div>
                                                <span class="iti__country-name">Georgia</span><span class="iti__dial-code">+995</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__de"></div>
                                                </div>
                                                <span class="iti__country-name">Germany</span><span class="iti__dial-code">+49</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gh"></div>
                                                </div>
                                                <span class="iti__country-name">Ghana</span><span class="iti__dial-code">+233</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gi"></div>
                                                </div>
                                                <span class="iti__country-name">Gibraltar</span><span class="iti__dial-code">+350</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gr"></div>
                                                </div>
                                                <span class="iti__country-name">Greece</span><span class="iti__dial-code">+30</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gl"></div>
                                                </div>
                                                <span class="iti__country-name">Greenland</span><span class="iti__dial-code">+299</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gd" role="option" data-dial-code="1" data-country-code="gd">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gd"></div>
                                                </div>
                                                <span class="iti__country-name">Grenada</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gp"></div>
                                                </div>
                                                <span class="iti__country-name">Guadeloupe</span><span class="iti__dial-code">+590</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gu" role="option" data-dial-code="1" data-country-code="gu">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gu"></div>
                                                </div>
                                                <span class="iti__country-name">Guam</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gt"></div>
                                                </div>
                                                <span class="iti__country-name">Guatemala</span><span class="iti__dial-code">+502</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gg"></div>
                                                </div>
                                                <span class="iti__country-name">Guernsey</span><span class="iti__dial-code">+44</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gn"></div>
                                                </div>
                                                <span class="iti__country-name">Guinea</span><span class="iti__dial-code">+224</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gy"></div>
                                                </div>
                                                <span class="iti__country-name">Guyana</span><span class="iti__dial-code">+592</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ht"></div>
                                                </div>
                                                <span class="iti__country-name">Haiti</span><span class="iti__dial-code">+509</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__hk"></div>
                                                </div>
                                                <span class="iti__country-name">Hong Kong</span><span class="iti__dial-code">+852</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__hu"></div>
                                                </div>
                                                <span class="iti__country-name">Hungary</span><span class="iti__dial-code">+36</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__is"></div>
                                                </div>
                                                <span class="iti__country-name">Iceland</span><span class="iti__dial-code">+354</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__in"></div>
                                                </div>
                                                <span class="iti__country-name">India</span><span class="iti__dial-code">+91</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__id"></div>
                                                </div>
                                                <span class="iti__country-name">Indonesia</span><span class="iti__dial-code">+62</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ie"></div>
                                                </div>
                                                <span class="iti__country-name">Ireland</span><span class="iti__dial-code">+353</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__il"></div>
                                                </div>
                                                <span class="iti__country-name">Israel</span><span class="iti__dial-code">+972</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__it"></div>
                                                </div>
                                                <span class="iti__country-name">Italy</span><span class="iti__dial-code">+39</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__jm"></div>
                                                </div>
                                                <span class="iti__country-name">Jamaica</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__jp"></div>
                                                </div>
                                                <span class="iti__country-name">Japan</span><span class="iti__dial-code">+81</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__je"></div>
                                                </div>
                                                <span class="iti__country-name">Jersey</span><span class="iti__dial-code">+44</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__jo"></div>
                                                </div>
                                                <span class="iti__country-name">Jordan</span><span class="iti__dial-code">+962</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__kz"></div>
                                                </div>
                                                <span class="iti__country-name">Kazakhstan</span><span class="iti__dial-code">+7</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__kg"></div>
                                                </div>
                                                <span class="iti__country-name">Kyrgyzstan</span><span class="iti__dial-code">+996</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__la"></div>
                                                </div>
                                                <span class="iti__country-name">Laos</span><span class="iti__dial-code">+856</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__lv"></div>
                                                </div>
                                                <span class="iti__country-name">Latvia</span><span class="iti__dial-code">+371</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__lb"></div>
                                                </div>
                                                <span class="iti__country-name">Lebanon</span><span class="iti__dial-code">+961</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ls"></div>
                                                </div>
                                                <span class="iti__country-name">Lesotho</span><span class="iti__dial-code">+266</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__li"></div>
                                                </div>
                                                <span class="iti__country-name">Liechtenstein</span><span class="iti__dial-code">+423</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__lt"></div>
                                                </div>
                                                <span class="iti__country-name">Lithuania</span><span class="iti__dial-code">+370</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__lu"></div>
                                                </div>
                                                <span class="iti__country-name">Luxembourg</span><span class="iti__dial-code">+352</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mo"></div>
                                                </div>
                                                <span class="iti__country-name">Macau</span><span class="iti__dial-code">+853</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mk"></div>
                                                </div>
                                                <span class="iti__country-name">Macedonia</span><span class="iti__dial-code">+389</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mg"></div>
                                                </div>
                                                <span class="iti__country-name">Madagascar</span><span class="iti__dial-code">+261</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mw"></div>
                                                </div>
                                                <span class="iti__country-name">Malawi</span><span class="iti__dial-code">+265</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__my"></div>
                                                </div>
                                                <span class="iti__country-name">Malaysia</span><span class="iti__dial-code">+60</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mv"></div>
                                                </div>
                                                <span class="iti__country-name">Maldives</span><span class="iti__dial-code">+960</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mt"></div>
                                                </div>
                                                <span class="iti__country-name">Malta</span><span class="iti__dial-code">+356</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mh"></div>
                                                </div>
                                                <span class="iti__country-name">Marshall Islands</span><span class="iti__dial-code">+692</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mq"></div>
                                                </div>
                                                <span class="iti__country-name">Martinique</span><span class="iti__dial-code">+596</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__yt"></div>
                                                </div>
                                                <span class="iti__country-name">Mayotte</span><span class="iti__dial-code">+262</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mx"></div>
                                                </div>
                                                <span class="iti__country-name">Mexico</span><span class="iti__dial-code">+52</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mc"></div>
                                                </div>
                                                <span class="iti__country-name">Monaco</span><span class="iti__dial-code">+377</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ms" role="option" data-dial-code="1" data-country-code="ms">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ms"></div>
                                                </div>
                                                <span class="iti__country-name">Montserrat</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__mz"></div>
                                                </div>
                                                <span class="iti__country-name">Mozambique</span><span class="iti__dial-code">+258</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__na"></div>
                                                </div>
                                                <span class="iti__country-name">Namibia</span><span class="iti__dial-code">+264</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__np"></div>
                                                </div>
                                                <span class="iti__country-name">Nepal</span><span class="iti__dial-code">+977</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__nl"></div>
                                                </div>
                                                <span class="iti__country-name">Netherlands</span><span class="iti__dial-code">+31</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__nc"></div>
                                                </div>
                                                <span class="iti__country-name">New Caledonia</span><span class="iti__dial-code">+687</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__nz"></div>
                                                </div>
                                                <span class="iti__country-name">New Zealand</span><span class="iti__dial-code">+64</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ni"></div>
                                                </div>
                                                <span class="iti__country-name">Nicaragua</span><span class="iti__dial-code">+505</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ne"></div>
                                                </div>
                                                <span class="iti__country-name">Niger</span><span class="iti__dial-code">+227</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ng"></div>
                                                </div>
                                                <span class="iti__country-name">Nigeria</span><span class="iti__dial-code">+234</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__no"></div>
                                                </div>
                                                <span class="iti__country-name">Norway</span><span class="iti__dial-code">+47</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__om"></div>
                                                </div>
                                                <span class="iti__country-name">Oman</span><span class="iti__dial-code">+968</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pk"></div>
                                                </div>
                                                <span class="iti__country-name">Pakistan</span><span class="iti__dial-code">+92</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pw"></div>
                                                </div>
                                                <span class="iti__country-name">Palau</span><span class="iti__dial-code">+680</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ps"></div>
                                                </div>
                                                <span class="iti__country-name">Palestine</span><span class="iti__dial-code">+970</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__py"></div>
                                                </div>
                                                <span class="iti__country-name">Paraguay</span><span class="iti__dial-code">+595</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pe"></div>
                                                </div>
                                                <span class="iti__country-name">Peru</span><span class="iti__dial-code">+51</span>
                                            </li>
                                            <li class="iti__country iti__standard iti__active" tabindex="-1" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph" aria-selected="true">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ph"></div>
                                                </div>
                                                <span class="iti__country-name">Philippines</span><span class="iti__dial-code">+63</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pl"></div>
                                                </div>
                                                <span class="iti__country-name">Poland</span><span class="iti__dial-code">+48</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pt"></div>
                                                </div>
                                                <span class="iti__country-name">Portugal</span><span class="iti__dial-code">+351</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pr"></div>
                                                </div>
                                                <span class="iti__country-name">Puerto Rico</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__qa"></div>
                                                </div>
                                                <span class="iti__country-name">Qatar</span><span class="iti__dial-code">+974</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__re"></div>
                                                </div>
                                                <span class="iti__country-name">Reunion</span><span class="iti__dial-code">+262</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ro"></div>
                                                </div>
                                                <span class="iti__country-name">Romania</span><span class="iti__dial-code">+40</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__rw"></div>
                                                </div>
                                                <span class="iti__country-name">Rwanda</span><span class="iti__dial-code">+250</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sm"></div>
                                                </div>
                                                <span class="iti__country-name">San Marino</span><span class="iti__dial-code">+378</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sa"></div>
                                                </div>
                                                <span class="iti__country-name">Saudi Arabia</span><span class="iti__dial-code">+966</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sn"></div>
                                                </div>
                                                <span class="iti__country-name">Senegal</span><span class="iti__dial-code">+221</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sg"></div>
                                                </div>
                                                <span class="iti__country-name">Singapore</span><span class="iti__dial-code">+65</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sx" role="option" data-dial-code="1" data-country-code="sx">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sx"></div>
                                                </div>
                                                <span class="iti__country-name">Sint Maarten</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sk"></div>
                                                </div>
                                                <span class="iti__country-name">Slovakia</span><span class="iti__dial-code">+421</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__si"></div>
                                                </div>
                                                <span class="iti__country-name">Slovenia</span><span class="iti__dial-code">+386</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__za"></div>
                                                </div>
                                                <span class="iti__country-name">South Africa</span><span class="iti__dial-code">+27</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__kr"></div>
                                                </div>
                                                <span class="iti__country-name">South Korea</span><span class="iti__dial-code">+82</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__es"></div>
                                                </div>
                                                <span class="iti__country-name">Spain</span><span class="iti__dial-code">+34</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__pm"></div>
                                                </div>
                                                <span class="iti__country-name">St. Pierre and Miquelon</span><span class="iti__dial-code">+508</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-vc" role="option" data-dial-code="1" data-country-code="vc">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__vc"></div>
                                                </div>
                                                <span class="iti__country-name">St. Vincent and Grenadines</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__sr"></div>
                                                </div>
                                                <span class="iti__country-name">Suriname</span><span class="iti__dial-code">+597</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__se"></div>
                                                </div>
                                                <span class="iti__country-name">Sweden</span><span class="iti__dial-code">+46</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ch"></div>
                                                </div>
                                                <span class="iti__country-name">Switzerland</span><span class="iti__dial-code">+41</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__tw"></div>
                                                </div>
                                                <span class="iti__country-name">Taiwan</span><span class="iti__dial-code">+886</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__tj"></div>
                                                </div>
                                                <span class="iti__country-name">Tajikistan</span><span class="iti__dial-code">+992</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__tz"></div>
                                                </div>
                                                <span class="iti__country-name">Tanzania</span><span class="iti__dial-code">+255</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__th"></div>
                                                </div>
                                                <span class="iti__country-name">Thailand</span><span class="iti__dial-code">+66</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__tg"></div>
                                                </div>
                                                <span class="iti__country-name">Togo</span><span class="iti__dial-code">+228</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__tr"></div>
                                                </div>
                                                <span class="iti__country-name">Turkey</span><span class="iti__dial-code">+90</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-tc" role="option" data-dial-code="1" data-country-code="tc">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__tc"></div>
                                                </div>
                                                <span class="iti__country-name">Turks And Caicos Islands</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ug"></div>
                                                </div>
                                                <span class="iti__country-name">Uganda</span><span class="iti__dial-code">+256</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ae"></div>
                                                </div>
                                                <span class="iti__country-name">United Arab Emirates</span><span class="iti__dial-code">+971</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__gb"></div>
                                                </div>
                                                <span class="iti__country-name">United Kingdom</span><span class="iti__dial-code">+44</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__us"></div>
                                                </div>
                                                <span class="iti__country-name">United States</span><span class="iti__dial-code">+1</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__uy"></div>
                                                </div>
                                                <span class="iti__country-name">Uruguay</span><span class="iti__dial-code">+598</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__uz"></div>
                                                </div>
                                                <span class="iti__country-name">Uzbekistan</span><span class="iti__dial-code">+998</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__va"></div>
                                                </div>
                                                <span class="iti__country-name">Vatican</span><span class="iti__dial-code">+39</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__vn"></div>
                                                </div>
                                                <span class="iti__country-name">Vietnam</span><span class="iti__dial-code">+84</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__ws"></div>
                                                </div>
                                                <span class="iti__country-name">Western Samoa</span><span class="iti__dial-code">+685</span>
                                            </li>
                                            <li class="iti__country iti__standard" tabindex="-1" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm">
                                                <div class="iti__flag-box">
                                                    <div class="iti__flag iti__zm"></div>
                                                </div>
                                                <span class="iti__country-name">Zambia</span><span class="iti__dial-code">+260</span>
                                            </li>
                                            </ul>
                                        </div>
                                        <input name="phone" type="tel" class="intl-tel-input form-field__input" autocomplete="off" placeholder="0905 123 4567" data-intl-tel-input-id="0">
                                    </div> -->
                                    
                                </div>
                                 
                                </div>
                            </div>
                        </section>
                        <section class="scroll-to-block">
                            <div class="step">
                                <div class="step__number">Step 4:</div>
                                <div class="step__title">Shipping Details</div>
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                <div>
                                    <select name="country" style="width: 1px; height: 1px; margin: 0px; padding: 0px; opacity: 0; border-width: 0px; position: absolute;">
                                        <option value="">Choose Country</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British">British</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
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
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten">Sint Maarten</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                        <option value="St. Vincent and Grenadines">St. Vincent and Grenadines</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vatican">Vatican</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Western Samoa">Western Samoa</option>
                                        <option value="Zambia">Zambia</option>
                                    </select>
                                    <div class="cs-container cs-container--value-set">
                                        <button type="button" class="cs-button"><span class="cs-button__text">Philippines</span> <span class="cs-button__arrow"></span></button> 
                                    </div>
                                    <label class="form-field__label">Country</label>
                                </div>
                                 
                                </div>
                                
                                <div class="form-field">
                                    <input placeholder="Town/City" value="" field="input" type="text" name="city" id="city" class="form-field__input"> <label class="form-field__label">Town/City</label> 
                                </div>
                                <div class="form-field form-field--full">
                                    <input placeholder="Street &amp; House Number" value="" field="input" type="text" name="address" id="address" maxlength="100" class="form-field__input"> <label class="form-field__label">Street &amp; House Number</label> 
                                </div>
                                 
                                <div class="form-field">
                                    <input placeholder="State" value="" field="input" type="text" name="state" id="state" class="form-field__input"> <label class="form-field__label">State</label> 
                                </div>
                                <div class="form-field">
                                    <input placeholder="Zip/Postal Code" value="" field="input" type="text" name="zip" id="zip" class="form-field__input"> <label class="form-field__label">Zip/Postal Code</label> 
                                </div>

                                <div class="form-field" hidden>
                                    <input placeholder="Customer IP" value="" field="input" type="text" name="customer_ip" id="customer_ip" class="form-field__input"> <label class="form-field__label">Customer IP</label> 
                                </div>
                            </div>
                        </section>
                        <section class="scroll-to-block">
                            <div class="step">
                                <div class="step__number">Step 5:</div>
                                <div class="step__title">Payment Details</div>
                            </div>
                            <div>
                                <div class="form-group">
                                <div class="form-field form-field--full">
                                    <span class="card-type default"></span> <input type="tel" name="cc_no" id="cc_no" placeholder="Card Number" class="cc-number form-field__input"> <label class="form-field__label">Card Number</label> 
                                </div>
                                </div>
                                <div class="form-group__two-col-card ">
                                <div class="form-field">
                                    <input type="tel" name="expiry_date" id="exp_mo" placeholder="MM" class="cc-expire form-field__input" maxlength="2"> <label class="form-field__label">MM</label> 
                                </div>
                                <div class="form-field">
                                    <input type="tel" name="expiry_date" id="exp_year" placeholder="YY" class="cc-expire form-field__input" maxlength="2"> <label class="form-field__label">MM</label> 
                                </div>
                                <div class="form-field" value="">
                                    <span class="form-field__help"></span> <input type="tel" name="cc_cvv" id="cc_cvv" placeholder="Security Code" class="cc-cvv form-field__input"> <label class="form-field__label">Security Code</label> 
                                </div>
                                </div>
                            </div>
                        </section>
                        <div class="accept-terms">
                            <div class="checkbox warranty__label">
                                <p class="accept-terms__label"></p>
                                I agree to the
                                <a href="/terms" target="_blank">Terms of Service</a></p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn--submit btn--primary btn--disabled" id="btn--submit" disabled="disabled">Complete checkout</button>
                    </div>
                    <div class="descriptor">Your purchases will appear as <strong>"rosecutebear442038089234"</strong> on your credit card statement.</div>
                    <div class="divider"><span>GUARANTEED SAFE CHECKOUT</span></div>
                    <ul class="security-icons">
                        <li><img src="/assets/img/mcafee.png"></li>
                        <li><img src="/assets/img/norton.png"></li>
                        <li><img src="/assets/img/es.png"></li>
                    </ul>
                    </form>
                    </section> 
                    <div class="warranty-note">
                    <div class="warranty-note__left">
                        <img src="/assets/img/guarantee.png"> 
                        <h2>30 Day Guarantee</h2>
                    </div>
                    <div class="warranty-note__texts">
                        <h2>30 Day Guarantee</h2>
                        <p>If you are not completely thrilled with your <strong>Roseal CuteBear</strong> 
                            - we are offering you a 30 day guarantee on all purchases. Simply send the item(s) back to us for a full refund or replacement, less S&amp;H.
                        </p>
                    </div>
                    </div>
                    </div></div></form>


    <div class="v-portal" style="display: none;"></div>
    <div class="v-portal" style="display: none;"></div>
    
</div>