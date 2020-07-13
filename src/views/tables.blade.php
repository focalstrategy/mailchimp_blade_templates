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
                            <td valign="top" width="600" class="flexibleContainerCell">
                                @foreach($tables as $table)
                                    <!-- CONTENT TABLE // -->
                                    <table align="Left" border="0" cellpadding="0" cellspacing="0" width="260" class="flexibleContainer">
                                        {{ $table }}
                                    </table>
                                    <!-- // CONTENT TABLE -->
                                @endforeach
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
