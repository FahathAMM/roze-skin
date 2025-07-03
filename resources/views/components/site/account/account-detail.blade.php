 @props([
     'customer' => $customer,
 ])

 <div class="my-account-content">
     <div class="account-details">
         <form action="#" class="form-account-details form-has-password">
             <div class="account-info">
                 <div class="tf-page-checkout">
                     <div class="wrap">
                         <h5 class="title">Information</h5>
                         <div class="info-box">

                             <fieldset class="grid-2">
                                 <div>
                                     <input type="text" name="first_name" value="{{ $customer->first_name ?? '' }}"
                                         placeholder="First Name*">
                                     <div class="invalid-feedback d-block invalid-msg"> </div>
                                 </div>
                                 <div>
                                     <input type="text" name="last_name" value="{{ $customer->last_name ?? '' }}"
                                         placeholder="Last Name">
                                 </div>
                             </fieldset>

                             <fieldset class="grid-2">
                                 <div>
                                     <input type="text" name="email" value="{{ $customer->email ?? '' }}"
                                         placeholder="Email Address">
                                 </div>
                                 <div>
                                     <input type="text" name="mobile" value="{{ $customer->mobile ?? '' }}"
                                         placeholder="Phone Number*" readonly>
                                     <div class="invalid-feedback d-block invalid-msg"> </div>
                                 </div>
                             </fieldset>

                             <fieldset class="grid-2">
                                 <input type="text" name="country" value="United Arab Emirates" readonly>
                                 <div class="tf-select">
                                     <select class="text-title" name="city" value="{{ $customer->city ?? '' }}">
                                         <option selected="" value="Choose Emirate">Choose Emirate</option>
                                         <option value="Abu Dhabi">Abu Dhabi</option>
                                         <option value="Dubai">Dubai</option>
                                         <option value="Sharjah">Sharjah</option>
                                         <option value="Ajman">Ajman</option>
                                         <option value="Umm Al Quwain">Umm Al Quwain</option>
                                         <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                         <option value="Fujairah">Fujairah</option>
                                     </select>
                                     <div class="invalid-feedback d-block invalid-msg"> </div>
                                 </div>
                             </fieldset>
                             <fieldset class="grid-2">
                                 <div>
                                     <input type="text" name="address" value="{{ $customer->address ?? '' }}"
                                         placeholder="address,...">
                                     <div class="invalid-feedback d-block invalid-msg"> </div>
                                 </div>
                                 <div>
                                     <input type="text" name="postal_code" placeholder="Postal Code">
                                 </div>
                             </fieldset>

                             <textarea name="description" placeholder="Write note..."></textarea>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="account-password">
                 <h5 class="title">Change Password</h5>
                 <fieldset class="position-relative password-item mb_20">
                     <input class="input-password" type="password" placeholder="Password*" name="password"
                         tabindex="2" value="" aria-required="true" required="">
                     <span class="toggle-password unshow">
                         <i class="icon-eye-hide-line"></i>
                     </span>
                 </fieldset>
                 <fieldset class="position-relative password-item mb_20">
                     <input class="input-password" type="password" placeholder="New Password*" name="password"
                         tabindex="2" value="" aria-required="true" required="">
                     <span class="toggle-password unshow">
                         <i class="icon-eye-hide-line"></i>
                     </span>
                 </fieldset>
                 <fieldset class="position-relative password-item">
                     <input class="input-password" type="password" placeholder="Confirm Password*" name="password"
                         tabindex="2" value="" aria-required="true" required="">
                     <span class="toggle-password unshow">
                         <i class="icon-eye-hide-line"></i>
                     </span>
                 </fieldset>
             </div>
             <div class="button-submit">
                 <button class="tf-btn btn-fill" type="submit">
                     <span class="text text-button">Update Account</span>
                 </button>
             </div>
         </form>
     </div>
 </div>

 @push('scripts')
     <script>
         $(document).ready(function() {});
     </script>
 @endpush
