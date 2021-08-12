<?php

$config = [

	'add_bus_rules' => [

		[

			'field' => 'bus_name',
            'label' => 'busname',
            'rules' => 'required'

		],

		[

			'field' => 'seat_no',
            'label' => 'Seat number',
            'rules' => 'required|numeric'

		],

		[

			'field' => 'source',
            'label' => 'source',
            'rules' => 'required'

		],

		[

			'field' => 'destination',
            'label' => 'destination',
            'rules' => 'required'

		],

		[

			'field' => 'depature',
            'label' => 'depature',
            'rules' => 'required'

		],

		[

			'field' => 'arrive',
            'label' => 'arrive',
            'rules' => 'required'

		],

		[

			'field' => 'fare',
            'label' => 'cost',
            'rules' => 'required'

		]
	],

	'admin_login_rules' => [

		[

			'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|alpha|trim'

		],

		[

			'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'

		]
	],

	'user_login_rules' => [

		[

			'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'

		],

		[

			'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'

		]
	],

	'add_notification_rules' => [

		[

			'field' => 'notification',
            'label' => 'Notification',
            'rules' => 'required'

		]

	],

	'add_offers_rules' => [

		[

			'field' => 'offers',
            'label' => 'Offers',
            'rules' => 'required'

		]

	],

	'add_user_rules' => [

		[

			'field' => 'f_name',
            'label' => 'First name',
            'rules' => 'required|alpha'

		],

		[

			'field' => 'l_name',
            'label' => 'Last name',
            'rules' => 'required|alpha'

		],

		[

			'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required|numeric|exact_length[10]'

		],

		[

			'field' => 'email',
            'label' => 'Email',
            'rules' => 'required'

		],

		[

			'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|matches[password1]'

		],

		[

			'field' => 'password1',
            'label' => ' Confirm Password',
            'rules' => 'required'

		]
	]
];