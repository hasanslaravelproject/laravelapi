<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [],
    ],

    'services' => [
        'name' => 'Services',
        'index_title' => 'Services List',
        'create_title' => 'Create Service',
        'edit_title' => 'Edit Service',
        'show_title' => 'Show Service',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'companies' => [
        'name' => 'Companies',
        'index_title' => 'Companies List',
        'create_title' => 'Create Company',
        'edit_title' => 'Edit Company',
        'show_title' => 'Show Company',
        'inputs' => [
            'service_id' => 'Service Id',
            'name' => 'Name',
            'email' => 'Email',
        ],
    ],

    'buses' => [
        'name' => 'Buses',
        'index_title' => 'Buses List',
        'create_title' => 'Create Bus',
        'edit_title' => 'Edit Bus',
        'show_title' => 'Show Bus',
        'inputs' => [],
    ],

    'bus_routes' => [
        'name' => 'Bus Routes',
        'index_title' => 'BusRoutes List',
        'create_title' => 'Create BusRoute',
        'edit_title' => 'Edit BusRoute',
        'show_title' => 'Show BusRoute',
        'inputs' => [],
    ],

    'bus_schedules' => [
        'name' => 'Bus Schedules',
        'index_title' => 'BusSchedules List',
        'create_title' => 'Create BusSchedule',
        'edit_title' => 'Edit BusSchedule',
        'show_title' => 'Show BusSchedule',
        'inputs' => [
            'date' => 'Date',
        ],
    ],

    'seat_classes' => [
        'name' => 'Seat Classes',
        'index_title' => 'SeatClasses List',
        'create_title' => 'Create SeatClass',
        'edit_title' => 'Edit SeatClass',
        'show_title' => 'Show SeatClass',
        'inputs' => [
            'seat_plan_id' => 'Seat Plan Id',
            'name' => 'Name',
            'seat_color' => 'Seat Color',
        ],
    ],

    'seat_plans' => [
        'name' => 'Seat Plans',
        'index_title' => 'SeatPlans List',
        'create_title' => 'Create SeatPlan',
        'edit_title' => 'Edit SeatPlan',
        'show_title' => 'Show SeatPlan',
        'inputs' => [
            'class_wise_seat_qty' => 'Class Wise Seat Qty',
            'seat_quantity' => 'Seat Quantity',
        ],
    ],

    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Roles List',
        'create_title' => 'Create Role',
        'edit_title' => 'Edit Role',
        'show_title' => 'Show Role',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],
];
