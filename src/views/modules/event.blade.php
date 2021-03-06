<!-- MODULE ROW // -->
<tr>
    <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center" valign="top">
                    <!-- FLEXIBLE CONTAINER // -->
                    <table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
                        <tr>
                            <td align="center" valign="top" width="600" class="flexibleContainerCell bottomShim">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="nestedContainer">
                                    <tr>
                                        <td valign="top" class="nestedContainerCell">
                                            <!-- CONTENT TABLE // -->
                                            <table align="Right" border="0" cellpadding="0" cellspacing="0" width="160" class="flexibleContainer">
                                                <tr>
                                                    <td align="center" valign="top" class="bottomShim">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="160" class="emailCalendar">
                                                            <tr>
                                                                <td align="center" valign="top" style="padding:5px;">
                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                        <tr>
                                                                            <td align="center" valign="top" class="emailCalendarMonth">
                                                                                {{ $date->format('F') }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" valign="top" class="emailCalendarDay">
                                                                                {{ $date->format('d') }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td align="center" valign="top" class="emailCalendarTime">
                                                                                {{ $time }}
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- // CONTENT TABLE -->
                                            <!-- CONTENT TABLE // -->
                                            <table align="Left" border="0" cellpadding="0" cellspacing="0" width="320" class="flexibleContainer">
                                                <tr>
                                                    <td valign="top" class="textContent">
                                                        {!! $text !!}
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- // CONTENT TABLE -->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- // FLEXIBLE CONTAINER -->
                </td>
            </tr>
        </table>
        <!-- // CENTERING TABLE -->
    </td>
</tr>
<!-- // MODULE ROW -->
