// select2
$('.select2').each(function () {
    var $this = $(this);
    $this.wrap('<div class="position-relative"></div>');
    $this
        .select2({
            dropdownAutoWidth: true,
            width: '100%',
            maximumSelectionLength: $this.attr('max-limit') ?? '',        
            dropdownParent: $this.parent(),
            placeholder: $this.attr('placeholder') || 'Select a value'        
    })
    .change(function () {
        $(this).valid();
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});