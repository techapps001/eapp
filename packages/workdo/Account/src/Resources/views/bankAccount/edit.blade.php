{{ Form::model($bankAccount, ['route' => ['bank-account.update', $bankAccount->id], 'method' => 'PUT', 'class'=>'needs-validation', 'novalidate']) }}
<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-12">
            <label class="require form-label">{{ __('Bank Type') }}</label>
            <select class="form-control" name="bank_type" id="bank_type">
                <option value="">{{ __('Select Type') }}</option>
                <option value="bank" @if ($bankAccount->bank_type =='bank') selected @endif  >{{ __('Bank') }}</option>
                <option value="wallet" @if ($bankAccount->bank_type =='wallet') selected @endif >{{ __('Wallet') }}</option>
            </select>
        </div>

    </div>
    <div class="row bank_type_wallet {{ $bankAccount->bank_type == 'wallet' ? '' : 'd-none' }}">
        <div class="form-group col-md-12">
            <label class="require form-label">{{ __('Wallet') }}</label>
            <select class="form-control" name="wallet_type" id="wallet_type">
                <option value="">{{ __('Select Type') }}</option>
                <option value="paypal" @if ($bankAccount->wallet_type =='paypal') selected @endif >{{ __('Paypal') }}</option>
                <option value="stripe" @if ($bankAccount->wallet_type =='stripe') selected @endif >{{ __('Stripe') }}</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('chart_account_id', __('Account'),['class'=>'form-label']) }}<x-required></x-required>
            <select name="chart_account_id" class="form-control" required="required">
                @foreach ($chartAccounts as $key => $chartAccount)
                    <option value="{{ $key }}" class="subAccount" {{ $bankAccount->chart_account_id == $key ? 'selected' : ''}}>{{ $chartAccount }}</option>
                    @foreach ($subAccounts as $subAccount)
                        @if ($key == $subAccount['account'])
                            <option value="{{ $subAccount['id'] }}" class="ms-5" {{ $bankAccount->chart_account_id == $subAccount['id'] ? 'selected' : ''}}> &nbsp; &nbsp;&nbsp; {{ $subAccount['code'] }} - {{ $subAccount['name'] }}</option>
                        @endif
                    @endforeach
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('payment_name', __('Payment Gateway'), ['class' => 'form-label']) }}<x-required></x-required>
                <select name="payment_name" class="form-control" required="required">
                    <option value=""disabled selected>{{ __('Select Type') }}</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                        @stack('bank_payments')
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('holder_name', __('Bank Holder Name'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::text('holder_name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => __('Enter Bank Holder Name')]) }}
            </div>
        </div>
        <div class="col-md-6 bank  {{  $bankAccount->bank_type == 'wallet' ? 'd-none' : '' }} ">
            <div class="form-group">
                {{ Form::label('bank_name', __('Bank Name'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::text('bank_name', null, ['class' => 'form-control', 'placeholder' => __('Enter Bank Name') ,  $bankAccount->bank_type == 'wallet' ? '' : 'required' => 'required' ]) }}
            </div>
        </div>
        <div class="col-md-6 bank  {{  $bankAccount->bank_type == 'wallet' ? 'd-none' : '' }} ">
            <div class="form-group">
                {{ Form::label('account_number', __('Account Number'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::text('account_number', null, ['class' => 'form-control',  $bankAccount->bank_type == 'wallet' ? '' : 'required' => 'required' , 'placeholder' => __('Enter Account Number')]) }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('opening_balance', __('Opening Balance'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::number('opening_balance', null, ['class' => 'form-control', 'required' => 'required', 'min' => '0','step'=>'0.1','placeholder' => __('Enter Opening Balance')]) }}
            </div>
        </div>

        <x-mobile divClass="col-lg-6 col-md-6 col-sm-6 {{  $bankAccount->bank_type == 'wallet' ? 'd-none' : '' }} " name="contact_number" label="{{ __('Contact Number') }}"
            placeholder="{{ __('Enter Contact Number') }}" value="{{ !empty($bankAccount->contact_number) ? $bankAccount->contact_number : null }}" id="contact_number" required>
        </x-mobile>

        <div class="col-md-6 bank  {{  $bankAccount->bank_type == 'wallet' ? 'd-none' : '' }} ">
            <div class="form-group">
                {{ Form::label('bank_branch', __('Bank Branch'), ['class' => 'form-label']) }}<x-required></x-required>
                {{ Form::text('bank_branch', null, array('class' => 'form-control', $bankAccount->bank_type == 'wallet' ? '' : 'required' => 'required' , "min"=>"0",'placeholder' => __('Enter Bank Branch'))) }}
            </div>
        </div>
        <div class="col-md-6 bank  {{  $bankAccount->bank_type == 'wallet' ? 'd-none' : '' }} ">
            <div class="form-group">
                {{ Form::label('swift', __('SWIFT'), ['class' => 'form-label']) }}
                {{ Form::text('swift', null, ['class' => 'form-control', 'placeholder' => __('Enter Swift Number')]) }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('bank_address', __('Bank Address'), ['class' => 'form-label ']) }}<x-required></x-required>
                {{ Form::textarea('bank_address', null, ['class' => 'form-control', 'placeholder' => __('Enter Bank Address'), 'rows' => '3', 'required' => 'required']) }}
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn  btn-light" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
    {{ Form::submit(__('Update'), ['class' => 'btn  btn-primary']) }}
</div>
{{ Form::close() }}
<script>
    $(document).ready(function() {
        $('#bank_type').on('change', function() {
            if ($(this).val() === 'bank') {
                $('.bank_type_wallet').addClass('d-none')
                $('.bank').removeClass('d-none')
                $('#swift').prop('required',true);
                $('#bank_name').prop('required',true);
                $('#account_number').prop('required',true);
                $('#bank_branch').prop('required',true);
                $('.bank').addClass('d-block');
            } else {
                $('#swift').prop('required',false);
                $('#bank_name').prop('required',false);
                $('#account_number').prop('required',false);
                $('#bank_branch').prop('required',false);
                $('.bank_type_wallet').removeClass('d-none')
                $('.bank_type_wallet').addClass('d-block');
            }
        });
    });


    $(document).ready(function() {
        $('#bank_type').on('change', function() {
            if ($(this).val() === 'wallet') {
                $('.bank_type_wallet').removeClass('d-none')
                $('.bank').addClass('d-none');
            } else {
                $('.bank').removeClass('d-none')
                $('.bank_type_wallet').addClass('d-block');
            }
        });
    });
</script>
