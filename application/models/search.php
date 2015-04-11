<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->setlimit=850;
	}
	function search_aircount( $key = '' )
	{	
		$sql="select t.*,k.country_name as country_name from gl_airport as t left join gl_country as k on t.country_code=k.country_code ";
		if( $key!='' ){
			$sql.="where t.port_kode like '". $key ."%' or  t.port_name like '". $key ."%' or k.country_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_airreg( $key = '' )
	{	
		$sql="select t.*,x.region_name as region_name from gl_airport as t left join gl_region as x on t.region_code=x.region_code ";
		if( $key!='' ){
			$sql.="where t.port_kode like '". $key ."%' or  t.port_name like '". $key ."%' or x.region_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_airport( $key = '' )
	{
		$sql="select * from gl_airport ";
		if( $key!='' ){
			$sql.="where gl_airport.port_kode like '". $key ."%' or  gl_airport.port_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_airline( $key = '' )
	{
		$sql="select * from gl_airline ";
		if( $key!=''){
			$sql.="where gl_airline.airline_id like '". $key ."%' or gl_airline.airline_name like '". $key ."%'";
		}
		$sql.="order by airline_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_air_quot( $key = '' )
	{
		$sql="select * from gl_air_quot ";
		if( $key!='' ){
			$sql.="where gl_air_quot.quot_id like '". $key ."%' or  gl_air_quot.attn like '". $key ."%'";
		}
		$sql.="order by quot_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_booking_cargo_air( $key = '' )
	{
		$sql="select * from gl_booking_cargo_air ";
		if( $key!='' ){
			$sql.="where (gl_booking_cargo_air.order_no like '". $key ."%' or  gl_booking_cargo_air.order_no like '". $key ."%') ";
		}

		$sql.="order by order_no";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_booking_cargo_sea( $key = '' )
	{
		$sql="select * from gl_booking_cargo_sea ";
		if( $key!='' ){
			$sql.="where (gl_booking_cargo_sea.order_no like '". $key ."%' or  gl_booking_cargo_sea.order_no like '". $key ."%') ";
		}

		$sql.="order by order_no";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_pr_air( $key = '' )
	{
		$sql="select * from gl_pr_air ";
		if( $key!='' ){
			$sql.="where gl_pr_air.vendor_id like '". $key ."%' or  gl_pr_air.company_name like '". $key ."%'";
		}
		$sql.="order by vendor_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_pr_airport_awal( $key = '' )
	{	
		$sql="select t.*,x.port_awal as port_name from gl_airport as t left join gl_pr_air_master as x on t.port_kode=x.port_awal ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_awal like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_awal";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_pr_airport_akhir( $key = '' )
	{	
		$sql="select t.*,x.port_akhir as port_name from gl_airport as t left join gl_pr_air_master as x on t.port_kode=x.port_akhir ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_akhir like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_akhir";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_pr_air_master( $key = '' )
	{
		$sql="select * from gl_pr_air_master ";
		if( $key!='' ){
			$sql.="where gl_pr_air_master.id like '". $key ."%' or  gl_pr_air_master.vendor_id like '". $key ."%'";
		}
		$sql.="order by id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	function search_pr_air_currency( $key = '' )
	{	
		$sql="select t.*,x.currency_description as description from gl_currency as t left join gl_pr_air_master as x on t.currency_code=x.currency_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.currency_code like '". $key ."%' or x.currency_description like '". $key ."%'";
		}
		$sql.="order by currency_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_pr_air_unit( $key = '' )
	{	
		$sql="select t.*,x.unit_description as description from gl_unit as t left join gl_pr_air_master as x on t.unit_code=x.unit_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.unit_code like '". $key ."%' or x.unit_description like '". $key ."%'";
		}
		$sql.="order by unit_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_chra( $key = '' )
	{
		$sql="select * from gl_charges ";
		if( $key!='' ){
			$sql.="where gl_charges.charges_code like '". $key ."%' or  gl_charges.description like '". $key ."%'";
		}
		$sql.="order by charges_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_city( $key = '' )
	{
		$sql="select * from gl_city ";
		if( $key!='' ){
			$sql.="where gl_city.city_code like '". $key ."%' or  gl_city.city_name like '". $key ."%'";
		}
		$sql.="order by city_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_comm( $key = '' )
	{
		$sql="select t.*,k.comdesc as nama_kepala from gl_commodity as t left join gl_commodity_class as k on t.commodity_class=k.comclass ";
		if( $key!='' ){
			$sql.="where t.code like '". $key ."%' or  t.name like '". $key ."%' or k.comdesc like '". $key ."%'";
		}
		$sql.="order by code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_commodity_class( $key = '' )
	{
		$sql="select * from gl_commodity_class ";
		if( $key!='' ){
			$sql.="where gl_commodity_class.comclass like '". $key ."%' or  gl_commodity_class.comdesc like '". $key ."%'";
		}
		$sql.="order by comclass";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_comcount( $key = '' )
	{	
		$sql="select t.*,k.country_name as country_name from gl_company as t left join gl_country as k on t.country_code=k.country_code ";
		if( $key!='' ){
			$sql.="where t.com_id like '". $key ."%' or  t.name like '". $key ."%' or k.country_name like '". $key ."%'";
		}
		$sql.="order by com_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_comcity( $key = '' )
	{	
		$sql="select t.*,k.city_name as city_name from gl_company as t left join gl_city as k on t.city_code=k.city_code ";
		if( $key!='' ){
			$sql.="where t.com_id like '". $key ."%' or  t.name like '". $key ."%' or k.city_name like '". $key ."%'";
		}
		$sql.="order by com_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_count( $key = '' )
	{
		$sql="select * from gl_country ";
		if( $key!='' ){
			$sql.="where gl_country.country_code like '". $key ."%' or  gl_country.country_name like '". $key ."%'";
		}
		$sql.="order by country_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_cur( $key = '' )
	{
		$sql="select * from gl_currency ";
		if( $key!='' ){
			$sql.="where gl_currency.currency_code like '". $key ."%' or  gl_currency.description like '". $key ."%'";
		}
		$sql.="order by currency_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_carrier_booking_sea( $key = '' )
	{
		$sql="select * from gl_carrier_booking_sea ";
		if( $key!='' ){
			$sql.="where (gl_carrier_booking_sea.si_no like '". $key ."%' or  gl_carrier_booking_sea.si_no like '". $key ."%') ";
		}

		$sql.="order by si_no";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	
	function search_customer( $key = '', $cond1='' )
	{
		$sql="select * from gl_customer ";
		if( $key!='' ){
			$sql.="where (gl_customer.cus_id like '". $key ."%' or  gl_customer.name like '". $key ."%') ";
		}
		if($cond1!='')
		{
			if($key=='')
			{
				$sql.= " where ";
			}
			else
			{
				$sql.= " and ";
			}
			if($cond1=='shipper')
			{
				$sql.= " shipper='1' ";
			}
			elseif($cond1=='consignee')
			{
				$sql.= " consignee='1' ";
			}
			elseif($cond1=='agent')
			{
				$sql.= " agent='1' ";
			}
			elseif($cond1=='shippingline')
			{
				$sql.= " shippingline='1' ";
			}
			elseif($cond1=='airline')
			{
				$sql.= " airline='1' ";
			}
			elseif($cond1=='coloader')
			{
				$sql.= " coloader='1' ";
			}

		}
		$sql.="order by cus_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_dev( $key = '' )
	{
		$sql="select t.*,k.nama as nama_kepala from gl_devisi as t left join gl_karyawan as k on t.kode_kepala=k.id_karyawan ";
		if( $key!='' ){
			$sql.="where t.kode_devisi like '". $key ."%' or  t.nama_devisi like '". $key ."%' or k.nama like '". $key ."%'";
		}
		$sql.="order by kode_devisi";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_freight_term( $key = '' )
	{
		$sql="select * from gl_freight_term ";
		if( $key!='' ){
			$sql.="where gl_freight_term.term_code like '". $key ."%' or  gl_freight_term.description like '". $key ."%'";
		}
		$sql.="order by term_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_reg( $key = '' )
	{
		$sql="select * from gl_region ";
		if( $key!='' ){
			$sql.="where gl_region.region_code like '". $key ."%' or  gl_region.region_name like '". $key ."%'";
		}
		$sql.="order by region_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sal( $key = '' )
	{
		$sql="select * from gl_msales ";
		if( $key!='' ){
			$sql.="where gl_msales.sales_code like '". $key ."%' or  gl_msales.nama_sales like '". $key ."%' or  gl_msales.address like '"."%'";
		}
		$sql.="order by sales_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sal_bon( $key = '' )
	{
		$sql="select t.target,t.min_target,t.percentage_bonus, DATE_FORMAT(t.date,'%d-%m-%Y') as date from gl_sales_bon as t ";
		if( $key!='' ){
			$sql.="where t.date like '". $key ."%' or  t.target like '". $key ."%'";
		}
		$this->db->order_by("date", "asc"); 
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sal_com( $key = '' )
	{
		$sql="select * as tgl from gl_sales_com as t ";
		if( $key!='' ){
			$sql.="where gl_sales_com.sales_code like '". $key ."%' or  gl_sales_com.nama_sales like '". $key ."%' or  gl_sales_com.team like '"."%'";
		}
		
		$sql.="order by sales_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_seacount( $key = '' )
	{	
		$sql="select t.*,k.country_name as country_name from gl_seaport as t left join gl_country as k on t.country_code=k.country_code ";
		if( $key!='' ){
			$sql.="where t.port_kode like '". $key ."%' or  t.port_name like '". $key ."%' or k.country_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_seareg( $key = '' )
	{	
		$sql="select t.*,x.region_name as region_name from gl_seaport as t left join gl_region as x on t.region_code=x.region_code ";
		if( $key!='' ){
			$sql.="where t.port_kode like '". $key ."%' or  t.port_name like '". $key ."%' or x.region_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_seaport( $key = '' )
	{
		$sql="select * from gl_seaport ";
		if( $key!='' ){
			$sql.="where gl_seaport.port_kode like '". $key ."%' or  gl_seaport.port_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_shipment_inbound_entry_sea( $key = '' )
	{
		$sql="select * from gl_shipment_inbound_entry_sea ";
		if( $key!='' ){
			$sql.="where (gl_shipment_inbound_entry_sea.order_no like '". $key ."%' or  gl_shipment_inbound_entry_sea.order_no like '". $key ."%') ";
		}

		$sql.="order by order_no";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	
	
	function search_pr_sea( $key = '' )
	{
		$sql="select * from gl_pr_sea ";
		if( $key!='' ){
			$sql.="where gl_pr_sea.vendor_id like '". $key ."%' or  gl_pr_sea.company_name like '". $key ."%'";
		}
		$sql.="order by vendor_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_pr_seaport_awal( $key = '' )
	{	
		$sql="select t.*,x.port_awal as port_name from gl_seaport as t left join gl_pr_sea_master as x on t.port_kode=x.port_awal ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_awal like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_awal";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_pr_seaport_akhir( $key = '' )
	{	
		$sql="select t.*,x.port_akhir as port_name from gl_seaport as t left join gl_pr_sea_master as x on t.port_kode=x.port_akhir ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_akhir like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_akhir";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_pr_sea_master( $key = '' )
	{
		$sql="select * from gl_pr_sea_master ";
		if( $key!='' ){
			$sql.="where gl_pr_sea_master.id like '". $key ."%' or  gl_pr_sea_master.vendor_id like '". $key ."%'";
		}
		$sql.="order by id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	function search_pr_sea_currency( $key = '' )
	{	
		$sql="select t.*,x.currency_description as description from gl_currency as t left join gl_pr_sea_master as x on t.currency_code=x.currency_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.currency_code like '". $key ."%' or x.currency_description like '". $key ."%'";
		}
		$sql.="order by currency_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_pr_sea_unit( $key = '' )
	{	
		$sql="select t.*,x.unit_description as description from gl_unit as t left join gl_pr_sea_master as x on t.unit_code=x.unit_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.unit_code like '". $key ."%' or x.unit_description like '". $key ."%'";
		}
		$sql.="order by unit_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	function search_pb_air( $key = '' )
	{
		$sql="SELECT p . * , c.id_seaport, c.nama AS port_kode, port_name
				FROM gl_airport AS p
				LEFT JOIN gl_publish_sea AS c ON p.port_kode = c.id_seaport
				AND p.port_name = c.nama";
		if( $key!='' ){
			$sql.="where p.port_kode like '". $key ."%' or  p.port_name like '". $key ."%'";
		}
		$sql.="order by port_kode";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	function search_pb_chra( $key = '' )
	{
		$sql="SELECT p . * , c.id_charges, c.description_charges AS charges_kode, description
				FROM gl_charges AS p
				LEFT JOIN gl_publish_sea AS c ON p.charges_kode = c.id_charges
				AND p.description = c.description_charges ";
		if( $key!='' ){
			$sql.="where p.charges_code like '". $key ."%' or  p.description like '". $key ."%'";
		}
		$sql.="order by charges_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sea_export_master( $key = '')
	{
		$sql="select * from gl_sea_export_master ";
		if( $key!='' ){
			$sql.="where (gl_sea_export_master.OBL_no like '". $key ."%' or gl_sea_export_master.OBL_no like '". $key ."%') ";
		}

		$sql.="order by OBL_no";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_sea_import_master( $key = '')
	{
		$sql="select * from gl_sea_import_master ";
		if( $key!=''){
			$sql.="where (gl_sea_import_master.OBL_no like '". $key ."%' or gl_sea_import_master.OBL_no like '". $key ."%')";
		}

		$sql.="order by OBL_no";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_sea_quot( $key = '' )
	{
		$sql="select * from gl_sea_quot ";
		if( $key!='' ){
			$sql.="where gl_sea_quot.quot_id like '". $key ."%' or  gl_sea_quot.attn like '". $key ."%'";
		}
		$sql.="order by quot_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sig( $key = '' )
	{
		$sql="select * from gl_signature ";
		if( $key!='' ){
			$sql.="where gl_signature.signature_code like '". $key ."%' or  gl_signature.title like '". $key ."%'";
		}
		$sql.="order by signature_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_sr_air( $key = '' )
	{
		$sql="select * from gl_sr_air ";
		if( $key!='' ){
			$sql.="where gl_sr_air.vendor_id like '". $key ."%' or  gl_sr_air.company_name like '". $key ."%'";
		}
		$sql.="order by vendor_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sr_airport_awal( $key = '' )
	{	
		$sql="select t.*,x.port_awal as port_name from gl_airport as t left join gl_sr_air_master as x on t.port_kode=x.port_awal ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_awal like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_awal";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sr_airport_akhir( $key = '' )
	{	
		$sql="select t.*,x.port_akhir as port_name from gl_airport as t left join gl_sr_air_master as x on t.port_kode=x.port_akhir ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_akhir like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_akhir";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_sr_air_master( $key = '' )
	{
		$sql="select * from gl_sr_air_master ";
		if( $key!='' ){
			$sql.="where gl_sr_air_master.id like '". $key ."%' or  gl_sr_air_master.vendor_id like '". $key ."%'";
		}
		$sql.="order by id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	function search_sr_air_currency( $key = '' )
	{	
		$sql="select t.*,x.currency_description as description from gl_currency as t left join gl_sr_air_master as x on t.currency_code=x.currency_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.currency_code like '". $key ."%' or x.currency_description like '". $key ."%'";
		}
		$sql.="order by currency_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_sr_air_unit( $key = '' )
	{	
		$sql="select t.*,x.unit_description as description from gl_unit as t left join gl_sr_air_master as x on t.unit_code=x.unit_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.unit_code like '". $key ."%' or x.unit_description like '". $key ."%'";
		}
		$sql.="order by unit_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_sr_sea( $key = '' )
	{
		$sql="select * from gl_sr_sea ";
		if( $key!='' ){
			$sql.="where gl_sr_sea.vendor_id like '". $key ."%' or  gl_sr_sea.company_name like '". $key ."%'";
		}
		$sql.="order by vendor_id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sr_seaport_awal( $key = '' )
	{	
		$sql="select t.*,x.port_awal as port_name from gl_airport as t left join gl_sr_sea_master as x on t.port_kode=x.port_awal ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_awal like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_awal";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_sr_seaport_akhir( $key = '' )
	{	
		$sql="select t.*,x.port_akhir as port_name from gl_airport as t left join gl_sr_sea_master as x on t.port_kode=x.port_akhir ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.port_akhir like '". $key ."%' or x.port_name like '". $key ."%'";
		}
		$sql.="order by code_akhir";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function search_sr_sea_master( $key = '' )
	{
		$sql="select * from gl_sr_sea_master ";
		if( $key!='' ){
			$sql.="where gl_sr_sea_master.id like '". $key ."%' or  gl_sr_sea_master.vendor_id like '". $key ."%'";
		}
		$sql.="order by id";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	function search_sr_sea_currency( $key = '' )
	{	
		$sql="select t.*,x.currency_description as description from gl_currency as t left join gl_sr_sea_master as x on t.currency_code=x.currency_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.currency_code like '". $key ."%' or x.currency_description like '". $key ."%'";
		}
		$sql.="order by currency_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}

	function search_sr_sea_unit( $key = '' )
	{	
		$sql="select t.*,x.unit_description as description from gl_unit as t left join gl_sr_sea_master as x on t.unit_code=x.unit_code ";
		if( $key!='' ){
			$sql.="where t.id like '". $key ."%' or  t.unit_code like '". $key ."%' or x.unit_description like '". $key ."%'";
		}
		$sql.="order by unit_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_unit( $key = '' )
	{
		$sql="select * from gl_unit ";
		if( $key!='' ){
			$sql.="where gl_unit.unit_code like '". $key ."%' or  gl_unit.description like '". $key ."%'";
		}
		$sql.="order by unit_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_ves( $key = '' )
	{
		$sql="select * from gl_vessel ";
		if( $key!='' ){
			$sql.="where gl_vessel.vessel_code like '". $key ."%' or  gl_vessel.vessel_name like '". $key ."%'";
		}
		$sql.="order by vessel_code";
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	function search_guest_book( $key = '' )
	{
		$sql="select t.nama,t.alamat,t.contack_person,t.company_name,t.tujuan, DATE_FORMAT(t.date,'%d-%m-%Y') as date from gl_guest_book as t ";
		if( $key!='' ){
			$sql.="where t.date like '". $key ."%' or  t.nama like '". $key ."%'";
		}
		$this->db->order_by("date", "asc"); 
		$sql.=" limit ".$this->setlimit;
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
}
/* End of file search.php */
/* Location: ./application/models/search.php */