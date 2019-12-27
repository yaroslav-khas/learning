$(document).ready(function () {
    $('.orderRecord').click(function () {
        var data=$(this).data('params');
        var selector=$(this).closest('td');
        $.ajax({
            url: TYPO3.settings.ajaxUrls['update_record_status'],
            data: data,
            method: 'GET',
            dataType: 'html',
            success: function(response) {
                selector.empty();
                selector.append('' +
                    '<div class="btn-group" role="group"><a class="btn btn-success t3js-record-confirm disabled" data-confirmed="yes" href="#" data-toggle="tooltip" data-toggle-title="Confirmed" title="" data-original-title="Confirmed"><span class="t3js-icon icon icon-size-small icon-state-default icon-actions-check" data-identifier="actions-check">\n' +
                    '\t<span class="icon-markup">\n' +
                    '<img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/actions/actions-check.svg" width="16" height="16">\n' +
                    '\t</span>\n' +
                    '\t\n' +
                    '</span></a></div>')
            }
        });
    })
});