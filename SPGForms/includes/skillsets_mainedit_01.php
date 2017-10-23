<!--
This is used by:
- UX
-->

<?php
    $SkillSets = ($row['SkillSets']? unserialize($row['SkillSets']) : array());     // Set to empty array if no SkillSets
?>

<h3>CHECK YOUR SKILL SETS:</h3>
<table width="100%">
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="Agile/Scrum Environment" <?php echo in_array('Agile/Scrum Environment',$SkillSets)? 'Checked':''; ?>>Agile/Scrum Environment</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Complex Interaction Models" <?php echo in_array('Complex Interaction Models',$SkillSets)? 'Checked':''; ?>>Complex Interaction Models</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Design" <?php echo in_array('Design',$SkillSets)? 'Checked':''; ?>>Design</label></td>
    </tr>
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="HTML/CSS" <?php echo in_array('HTML/CSS',$SkillSets)? 'Checked':''; ?>>HTML/CSS</label></td><td><label><input type="checkbox" name="SkillSets[]" value="iOS Mobile Skills" <?php echo in_array('iOS Mobile Skills',$SkillSets)? 'Checked':''; ?>>iOS Mobile Skills</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Android Mobile Skills" <?php echo in_array('Android Mobile Skills',$SkillSets)? 'Checked':''; ?>>Android Mobile Skills</label></td>
    </tr>
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="Prototyping" <?php echo in_array('Prototyping',$SkillSets)? 'Checked':''; ?>>Prototyping</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Quantitative/Qualitative Research" <?php echo in_array('Quantitative/Qualitative Research',$SkillSets)? 'Checked':''; ?>>Quantitative/Qualitative Research</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Responsive Design" <?php echo in_array('Responsive Design',$SkillSets)? 'Checked':''; ?>>Responsive Design</label></td>
    </tr>
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="Style Guides" <?php echo in_array('Style Guides',$SkillSets)? 'Checked':''; ?>>Style Guides</label></td><td><label><input type="checkbox" name="SkillSets[]" value="User/Process Flows" <?php echo in_array('User/Process Flows',$SkillSets)? 'Checked':''; ?>>User/Process Flows</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Competitor Analysis" <?php echo in_array('Competitor Analysis',$SkillSets)? 'Checked':''; ?>>Competitor Analysis</label></td>
    </tr>
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="Content Mapping" <?php echo in_array('Content Mapping',$SkillSets)? 'Checked':''; ?>>Content Mapping</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Design Research" <?php echo in_array('Design Research',$SkillSets)? 'Checked':''; ?>>Design Research</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Interaction Design" <?php echo in_array('Interaction Design',$SkillSets)? 'Checked':''; ?>>Interaction Design</label></td>
    </tr>
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="Product Management" <?php echo in_array('Product Management',$SkillSets)? 'Checked':''; ?>>Product Management</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Quality Assurance" <?php echo in_array('Quality Assurance',$SkillSets)? 'Checked':''; ?>>Quality Assurance</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Site Maps" <?php echo in_array('Site Maps',$SkillSets)? 'Checked':''; ?>>Site Maps</label></td>
    </tr>
    <tr>
        <td><label><input type="checkbox" name="SkillSets[]" value="Storyboards" <?php echo in_array('Storyboards',$SkillSets)? 'Checked':''; ?>>Storyboards</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Usability Testing" <?php echo in_array('Usability Testing',$SkillSets)? 'Checked':''; ?>>Usability Testing</label></td><td><label><input type="checkbox" name="SkillSets[]" value="Wireframes" <?php echo in_array('Wireframes',$SkillSets)? 'Checked':''; ?>>Wireframes</label></td>
    </tr>
</table>
