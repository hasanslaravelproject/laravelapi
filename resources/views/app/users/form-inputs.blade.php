@php $editing = isset($user) @endphp

<div class="row">
    <div class="form-group col-sm-12 mt-4">
        <h4>Assign @lang('crud.roles.name')</h4>

        @foreach ($roles as $role)
        <div>
            <x-inputs.checkbox
                id="role{{ $role->id }}"
                name="roles[]"
                label="{{ ucfirst($role->name) }}"
                value="{{ $role->id }}"
                :checked="isset($user) ? $user->hasRole($role) : false"
                :add-hidden-value="false"
            ></x-inputs.checkbox>
        </div>
        @endforeach
    </div>
</div>
