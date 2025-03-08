<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Quotation - Shadapixel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6 max-w-3xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Request a Quotation</h1>
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
                <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md hover:bg-indigo-700">Submit Quotation Request</button>
            </div>
        </form>
    </div>

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
</body>
</html>
