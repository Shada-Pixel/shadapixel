<x-guest-layout>

    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-start items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">Request a Quotation</span> </h1>
            </div>
        </div>
    </div>
    <section class="">

        <div class="container mx-auto p-6 max-w-3xl">
            <form id="quotationForm" action="{{ route('quotation.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
    
    
                <!-- Client Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name *</label>
                        <input type="text" name="full_name" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-indigo-200" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email Address *</label>
                        <input type="email" name="email" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-indigo-200" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" name="phone" class="mt-1 block w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Company Name</label>
                        <input type="text" name="company_name" class="mt-1 block w-full p-2 border rounded-md">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Website URL (if applicable)</label>
                        <input type="url" name="website_url" class="mt-1 block w-full p-2 border rounded-md">
                    </div>
                </div>
    
                <!-- Quotation Overview -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Project Name *</label>
                    <input type="text" name="project_name" class="mt-1 block w-full p-2 border rounded-md" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Service Type *</label>
                    <select name="service_type" class="mt-1 block w-full p-2 border rounded-md" required>
                        <option value="">Select an option</option>
                        <option value="web_development">Web Development</option>
                        <option value="graphic_design">Graphic Design</option>
                        <option value="ui_ux_design">UI/UX Design</option>
                        <option value="digital_marketing">Digital Marketing</option>
                        <option value="other">Other</option>
                    </select>
                    <div id="otherServiceType" class="mt-2 hidden">
                        <label class="block text-sm font-medium text-gray-700">Please specify</label>
                        <input type="text" name="service_type_other" class="mt-1 block w-full p-2 border rounded-md">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Project Description *</label>
                    <textarea name="project_description" class="mt-1 block w-full p-2 border rounded-md" rows="4" required></textarea>
                </div>
    
                <!-- Scope and Goals -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Primary Goal *</label>
                    <select name="primary_goal" class="mt-1 block w-full p-2 border rounded-md" required>
                        <option value="">Select an option</option>
                        <option value="increase_sales">Increase Sales</option>
                        <option value="improve_visibility">Improve Brand Visibility</option>
                        <option value="enhance_ux">Enhance User Experience</option>
                        <option value="other">Other</option>
                    </select>
                    <div id="otherGoal" class="mt-2 hidden">
                        <label class="block text-sm font-medium text-gray-700">Please specify</label>
                        <input type="text" name="primary_goal_other" class="mt-1 block w-full p-2 border rounded-md">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Target Audience</label>
                    <textarea name="target_audience" class="mt-1 block w-full p-2 border rounded-md" rows="2"></textarea>
                </div>
    
                <!-- Technical Details -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Preferred Features/Functionalities</label>
                    <textarea name="features" class="mt-1 block w-full p-2 border rounded-md" rows="3"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Existing Tech Stack (if any)</label>
                    <input type="text" name="tech_stack" class="mt-1 block w-full p-2 border rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Domain and Hosting Status</label>
                    <select name="hosting_status" class="mt-1 block w-full p-2 border rounded-md">
                        <option value="owned">Already Owned</option>
                        <option value="need_assistance">Need Assistance Purchasing</option>
                        <option value="not_sure">Not Sure</option>
                    </select>
                </div>
    
                <!-- Design Preferences -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Design Style</label>
                    <textarea name="design_style" class="mt-1 block w-full p-2 border rounded-md" rows="2" placeholder="e.g., Modern, Minimalist, or link to inspiration sites"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Brand Assets (logos, colors, etc.)</label>
                    <input type="file" name="brand_assets[]" class="mt-1 block w-full" multiple accept=".png,.jpg,.jpeg,.pdf">
                </div>
    
                <!-- Budget and Timeline -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Budget Range *</label>
                    <select name="budget" class="mt-1 block w-full p-2 border rounded-md" required>
                        <option value="">Select an option</option>
                        <option value="1k-5k">$1,000 - $5,000</option>
                        <option value="5k-10k">$5,000 - $10,000</option>
                        <option value="10k+">$10,000+</option>
                        <option value="flexible">Flexible</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Desired Completion Date *</label>
                    <select name="timeline" class="mt-1 block w-full p-2 border rounded-md" required>
                        <option value="">Select an option</option>
                        <option value="1_month">1 Month</option>
                        <option value="3_months">3 Months</option>
                        <option value="6_months">6 Months</option>
                        <option value="asap">ASAP</option>
                    </select>
                </div>
    
                <!-- Additional Information -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Competitor Websites</label>
                    <textarea name="competitors" class="mt-1 block w-full p-2 border rounded-md" rows="2"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Anything Else?</label>
                    <textarea name="additional_info" class="mt-1 block w-full p-2 border rounded-md" rows="3"></textarea>
                </div>
    
                <!-- Consent and Submission -->
                <div>
                    <label class="flex items-center">
                        <input type="checkbox" name="terms" class="mr-2" required>
                        <span class="text-sm text-gray-700">I agree to the <a href="#" class="text-indigo-600">Terms of Service</a> and <a href="#" class="text-indigo-600">Privacy Policy</a></span>
                    </label>
                </div>
                <div>
                    <button class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['Submit_Now'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">
                        Request Quotation 
                    </button>
                </div>
            </form>
        </div>
    </section>

    

    <x-slot name="scripts">
        <script>
            $(document).ready(function() {
                // Show/hide "Other" fields dynamically
                $('select[name="service_type"]').change(function() {
                    $('#otherServiceType').toggle($(this).val() === 'other');
                });
                $('select[name="primary_goal"]').change(function() {
                    $('#otherGoal').toggle($(this).val() === 'other');
                });
            });
        </script>
    </x-slot>
</x-guest-layout>



