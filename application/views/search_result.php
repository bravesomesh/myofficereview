<?php
foreach ($query->result() as $row)
{
?>
    <a href="<?php echo base_url('index.php/welcome/show_company?q='.$row->company_id); ?>"><?php echo $row->company_name; ?></a>
<?php
}

?>