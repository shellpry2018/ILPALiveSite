<?php 
	include(locate_template('reporting-forms/global/radio-options.php'));
	$variable_names = [
		'report_type' => [
			'description' => 'found_pet',
			'type' => 'hidden',
			'value' => 'found-pet',
			'category' => 'Found Pets',
		],
        'first_name' => [
            'description' => 'First Name',
            'type' => 'text',
        ],
        'last_name' => [
            'description' => 'Last Name',
            'type' => 'text',
        ],
        'phone' => [
            'description' => 'Your Phone Number - Please make sure it is accurate!',
            'type' => 'phone',
        ],
        'alternate_phone' => [
            'description' => 'Alternative Phone Number (will not be posted on alert)',
            'type' => 'phone',
            'required' => false,
        ],
        'email' => [
            'description' => 'Email Address',
            'type' => 'email',
        ],
        'confirm_email' => [
            'description' => 'Confirm Email Address',
            'type' => 'email',
        ],
        'zip_code' => [
            'description' => 'Zip Code where the pet was FOUND',
            'type' => 'zipcode',
        ],
        'date_found' => [
            'description' => 'Date Pet Was Found',
            'type' => 'datepicker',
        ],
        'time_found' => [
            'description' => 'Approximate Time Pet Was Found',
            'type' => 'timepicker',
        ],
        'post_categories' => [
            'description' => 'What Type of Pet Was Found?',
            'type' => 'category-children',
            'category_list' => [
            	'Found Dogs',
            	'Found Cats',
            	'Found "Other Pets"',
            ],
        ],
        'pet_image' => [
            'description' => 'Post Picture of Found Pet (THIS IS CRITICAL!)',
            'type' => 'image',
        ],
        'pet_gender' => [
        	'description' => 'Pet\'s Gender',
        	'type' => 'radio',
        	'radio_options' => $gender_options,
        ],
        'pet_description' => [
            'description' => 'Description of Found Pet',
            'type' => 'textarea',
        ],
        'pet_microchipped' => [
            'description' => 'Is Pet Microchipped?',
            'type' => 'radio',
        	'radio_options' => $microchipped_options,
        ],
        'pet_fixed' => [
        	'description' => 'Is Pet Spayed/Neutered?',
        	'type' => 'radio',
        	'radio_options' => $yes_no_unsure_options,
        ],
        'pet_collar' => [
        	'description' => 'Is Pet Wearing a Collar?',
        	'type' => 'radio',
        	'radio_options' => $yes_no_unsure_options,
        ],
        'collar_description' => [
        	'description' => 'Describe Collar',
        	'type' => 'textarea',
        	'hidden' => true,
        ],
        'nearest_intersection' => [
            'description' => 'Nearest Intersection/Cross Streets Where Pet Was Found',
            'type' => 'textarea',
        ],
        'nearest_neighborhood' => [
            'description' => 'Nearest Neighborhood, Subdivision or Complex To Where The Pet Was Found? If None or Unknown, Leave Blank',
            'type' => 'textarea',
            'required' => false,
        ],
        'nearest_city' => [
            'description' => 'In What City/Town Was the Pet Found?',
            'type' => 'text',
        ],
        'nearest_county' => [
            'description' => 'In What County Was the Pet Found?',
            'type' => 'radio',
            'radio_options' => $county_list,
        ],
	];
?>