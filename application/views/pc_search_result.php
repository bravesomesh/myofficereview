<?php
foreach ($query->result() as $row)
{
?>
    <a href="#" onclick="select_company_from_search('<?php echo $row->company_id; ?>','<?php echo $row->company_name; ?>')" class="select_company_from_dropdown" id="company_id_<?php echo $row->company_id; ?>"><?php echo $row->company_name; ?></a>
<?php
}

?>
