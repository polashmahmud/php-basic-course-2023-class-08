<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <title>Tailwind CSS Form</title>
</head>
<body class="bg-gray-200 p-6">

<div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">

    <h2 class="text-2xl font-semibold mb-4">Example Form</h2>

    <?php
    // Initialize variables to hold submitted values
    $submittedValues = [
        'name' => '',
        'gender' => '',
        'subscribe' => '',
        'datepicker' => '',
        'timepicker' => '',
        'options' => [],
        'multicheckbox' => [],
        'country' => '',
    ];

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Update submitted values
        $submittedValues['name'] = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
        $submittedValues['gender'] = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
        $submittedValues['subscribe'] = isset($_POST['subscribe']) ? 'checked' : '';
        $submittedValues['datepicker'] = isset($_POST['datepicker']) ? htmlspecialchars($_POST['datepicker']) : '';
        $submittedValues['timepicker'] = isset($_POST['timepicker']) ? htmlspecialchars($_POST['timepicker']) : '';
        $submittedValues['options'] = isset($_POST['options']) ? $_POST['options'] : [];
        $submittedValues['multicheckbox'] = isset($_POST['multicheckbox']) ? $_POST['multicheckbox'] : [];
        $submittedValues['country'] = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    }
    ?>

    <form action="#" method="post">

        <!-- Text Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" value="<?= $submittedValues['name'] ?>" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Radio Buttons -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">Gender</label>
            <div class="mt-1 space-x-4">
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="male" class="form-radio text-indigo-600" <?= ($submittedValues['gender'] === 'male') ? 'checked' : '' ?>>
                    <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="female" class="form-radio text-indigo-600" <?= ($submittedValues['gender'] === 'female') ? 'checked' : '' ?>>
                    <span class="ml-2">Female</span>
                </label>
            </div>
        </div>

        <!-- Checkbox -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">Subscribe to Newsletter</label>
            <input type="checkbox" id="subscribe" name="subscribe" class="form-checkbox text-indigo-600" <?= $submittedValues['subscribe'] ?>>
        </div>

        <!-- Date Picker -->
        <div class="mb-4">
            <label for="datepicker" class="block text-sm font-medium text-gray-600">Pick a Date</label>
            <input type="text" id="datepicker" name="datepicker" value="<?= $submittedValues['datepicker'] ?>" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Time Picker -->
        <div class="mb-4">
            <label for="timepicker" class="block text-sm font-medium text-gray-600">Pick a Time</label>
            <input type="text" id="timepicker" name="timepicker" value="<?= $submittedValues['timepicker'] ?>" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Multiselect Dropdown using Select2 -->
        <div class="mb-4">
            <label for="options" class="block text-sm font-medium text-gray-600">Select Options</label>
            <select id="options" name="options[]" class="mt-1 p-2 w-full border rounded-md" multiple>
                <option value="option1" <?= in_array('option1', $submittedValues['options']) ? 'selected' : '' ?>>Option 1</option>
                <option value="option2" <?= in_array('option2', $submittedValues['options']) ? 'selected' : '' ?>>Option 2</option>
                <option value="option3" <?= in_array('option3', $submittedValues['options']) ? 'selected' : '' ?>>Option 3</option>
            </select>
        </div>

        <!-- Multi-checkbox -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">Select Multiple Options</label>
            <div class="space-y-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="multicheckbox[]" value="checkbox1" class="form-checkbox text-indigo-600" <?= in_array('checkbox1', $submittedValues['multicheckbox']) ? 'checked' : '' ?>>
                    <span class="ml-2">Checkbox 1</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="multicheckbox[]" value="checkbox2" class="form-checkbox text-indigo-600" <?= in_array('checkbox2', $submittedValues['multicheckbox']) ? 'checked' : '' ?>>
                    <span class="ml-2">Checkbox 2</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="multicheckbox[]" value="checkbox3" class="form-checkbox text-indigo-600" <?= in_array('checkbox3', $submittedValues['multicheckbox']) ? 'checked' : '' ?>>
                    <span class="ml-2">Checkbox 3</span>
                </label>
            </div>
        </div>

        <!-- Select Dropdown -->
        <div class="mb-4">
            <label for="country" class="block text-sm font-medium text-gray-600">Country</label>
            <select id="country" name="country" class="mt-1 p-2 w-full border rounded-md">
                <option value="usa" <?= ($submittedValues['country'] === 'usa') ? 'selected' : '' ?>>United States</option>
                <option value="canada" <?= ($submittedValues['country'] === 'canada') ? 'selected' : '' ?>>Canada</option>
                <option value="uk" <?= ($submittedValues['country'] === 'uk') ? 'selected' : '' ?>>United Kingdom</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-indigo-600 text-white p-2 rounded-md">Submit</button>
        </div>

    </form>

</div>

<script>
    // Initialize Select2 for the multiselect dropdown
    $(document).ready(function() {
        $('#options').select2();
    });

    // Initialize Flatpickr for the date and time pickers
    flatpickr("#datepicker", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });

    flatpickr("#timepicker", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
</script>

</body>
</html>
