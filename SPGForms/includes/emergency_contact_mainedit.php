<!--
This is for the management system all fields are listed.
-->

<h3>EMERGENCY CONTACT:</h3>
<table>
    <tr>
        <th>NAME</th><th>RELATIONSHIP</th><th>PHONE NUMBER</th>
    </tr>
    <tr>
        <td>
            <input name="EmergencyName" value="<?php echo htmlspecialchars($row['EmergencyName']); ?>">
        </td>
        <td>
            <input name="EmergencyRelationship" value="<?php echo htmlspecialchars($row['EmergencyRelationship']); ?>">
        </td>
        <td>
            <input name="EmergencyPhone" value="<?php echo htmlspecialchars($row['EmergencyPhone']); ?>">
        </td>
    </tr>
</table>
