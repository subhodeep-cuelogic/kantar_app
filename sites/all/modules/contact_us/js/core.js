$(document).ready(function() {

    $('#startDate').Zebra_DatePicker();

    $('#datepicker-example2').Zebra_DatePicker({
        direction: 1    // boolean true would've made the date picker future only
                        // but starting from today, rather than tomorrow
    });

    $('#endDate').Zebra_DatePicker({
        //direction: true,
        //disabled_dates: ['* * * 0,6']   // all days, all monts, all years as long
                                        // as the weekday is 0 or 6 (Sunday or Saturday)
    });

    $('#datepicker-example4').Zebra_DatePicker({
        direction: [1, 10]
    });

    $('#datepicker-example5').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
        direction: ['2012-08-01', '2012-08-12']
    });

    $('#datepicker-example6').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
        direction: ['2012-08-01', false]
    });

    $('#datepicker-example7-start').Zebra_DatePicker({
        direction: true,
        pair: $('#datepicker-example7-end')
    });

    $('#datepicker-example7-end').Zebra_DatePicker({
        direction: 1
    });

    $('#datepicker-example8').Zebra_DatePicker({
        format: 'M d, Y'
    });

    $('#datepicker-example9').Zebra_DatePicker({
        show_week_number: 'Wk'
    });

    $('#datepicker-example10').Zebra_DatePicker({
        view: 'years'
    });

    $('#datepicker-example11').Zebra_DatePicker({
        format: 'm Y'
    });

    $('#datepicker-example12').Zebra_DatePicker({
        onChange: function(view, elements) {
            if (view == 'days') {
                elements.each(function() {
                    if ($(this).data('date').match(/\-24$/))
                        $(this).css({
                            background: '#C40000',
                            color:      '#FFF'
                        });
                });
            }
        }
    });

    $('#datepicker-example13').Zebra_DatePicker({
        always_visible: $('#container')
    });

    $('#datepicker-example14').Zebra_DatePicker();

});

/**
 * Function to calculate dates.
 * @return {Boolean}
 */
function calculateDates()
{
    var strFirstDate = $("#startDate").val();
    var strEndDate = $("#endDate").val();

    myDate = strFirstDate.split("-");
    var newDate = myDate[1] + "," + myDate[0] + "," + myDate[2];
    var strCompareFirstDate = new Date(newDate).getTime();

    myDate1 = strEndDate.split("-");
    var newEndDate = myDate1[1] + "," + myDate1[0] + "," + myDate1[2];
    var strCompareEndDate = new Date(newEndDate).getTime();

    if (strFirstDate != "" && strEndDate == "") {
        alert("Please enter both dates");
        return false;
    }
    if (strFirstDate == "" && strEndDate != "") {
        alert("Please enter both dates");
        return false;
    }

    if (strCompareFirstDate > strCompareEndDate) {
        alert("To date must be greater than from date");
        return false;
    }
}
