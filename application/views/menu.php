<?php if( isset( $capabilities ) ) $user_cap = $capabilities; ?>
<?php $cap = unserialize( $user_cap ); ?>
<div class="navbar navbar-fixed-top navbar-inverse" style="height:15px">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo base_url(); ?>">PT.Bina Sinar Amity</a>
			<div class="nav-collapse">
				<ul class="nav">
					<?php if( in_array( 'read_devisi', $cap )
					){ ?>
					<li class="dropdown" id="nav_master">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#master">
						<i class="icon-book icon-white"></i> Master<b class="caret"></b></a>
						<ul class="dropdown-menu">
														
							<?php if( in_array( 'read_airline', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/airline'); ?>" target="Airline">Airline</a></li>
							<?php } ?>
																					
							<?php if( in_array( 'read_guest_book', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/guest_book'); ?>" target="Guest_book">Buku Tamu</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_capasity', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/capasity'); ?>" target="Capasity">Capasity</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_city', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/city'); ?>" target="City">City</a></li>
							<?php } ?>
							
							<li class="dropdown-submenu">
								<a href="#stock">Commodity</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_commodity', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/commodity'); ?>" target="Commodity">Commodity</a></li>
									<?php }
                                     if( in_array( 'read_commodity_class', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/commodity_class'); ?>" target="Commodity Class">Commodity Class</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>	
							
							<?php if( in_array( 'read_company', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/company'); ?>" target="Company">Company</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_country', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/country'); ?>" target="Country">Country</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_currency', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/currency'); ?>" target="Currency">Currency</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_customer', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/customer'); ?>" target="Customer">Customer</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_charges', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/charges'); ?>" target="Charges">Component Freight</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_freight_term', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/freight_term'); ?>" target="Freight_term">Freight Term</a></li>
							<?php } ?>

							<li class="dropdown-submenu">
								<a href="#stock">Port</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_airport', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/airport'); ?>" target="Airport">Airport</a></li>
									<?php }
                                     if( in_array( 'read_seaport', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/seaport'); ?>" target="Seaport">Seaport</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>
							
							<?php if( in_array( 'read_region', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/region'); ?>" target="Region">Region</a></li>
							<?php } ?>
							
							<li class="dropdown-submenu">
								<a href="#stock">Sales</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_sales', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/sales'); ?>" target="Sales">Sales</a></li>
									<?php }
                                     if( in_array( 'read_sales_bon', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/sales_bon'); ?>" target="Sales Bonus">Sales Bonus</a></li>
									<?php }
									 if( in_array( 'read_sales_com', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/sales_com'); ?>" target="Sales Commission">Sales Commission</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							
							<?php if( in_array( 'read_signature', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/signature'); ?>" target="Signature">Signature</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_unit', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/unit'); ?>" target="Unit">Unit</a></li>
							<?php } ?>
							
							<?php if( in_array( 'read_vessel', $cap ) ){ ?>
							<li><a href="<?php echo base_url('master/vessel'); ?>" target="Vessel">Vessel</a></li>
							<?php } ?>							
							
							<li class="dropdown-submenu">
								<a href="#stock">Publish Rate</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_publish_rate_air', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/publish_rate_air'); ?>" target="Publish Rate Air">Publish Rate (Air)</a></li>
									<?php }
                                     if( in_array( 'read_publish_rate_sea', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/publish_rate_sea'); ?>" target="Publish Rate Sea">Publish Rate (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>
		
							<li class="dropdown-submenu">
								<a href="#stock">Selling Rate</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_selling_rate_air', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/selling_rate_air'); ?>" target="Selling Rate (Air)">Selling Rate (Air)</a></li>
									<?php }
                                     if( in_array( 'read_selling_rate_sea', $cap ) ){ ?>
									<li><a href="<?php echo base_url('master/selling_rate_sea'); ?>" target="Selling Rate (Sea)">Selling Rate (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>
							
						</ul>
					</li>
					<?php } ?>
					
					<?php if( in_array( 'read_jurnal_umum', $cap ) 
						|| in_array( 'read_booking_cargo_sea', $cap ) 
						|| in_array( 'read_carrier_booking_sea', $cap ) 
					){ ?>
					<li class="dropdown" id="nav_transaksi">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#transaksi">
						<i class="icon-th-list icon-white"></i> Transaksi<b class="caret"></b></a>
						<ul class="dropdown-menu">
							
							<li class="dropdown-submenu">
								<a href="#stock">Quotation</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_quotation', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_quotation'); ?>" target="Quotation (Air)">Quotation (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_quotation', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_quotation'); ?>" target="Quotation (Sea)">Quotation (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>
							<?php if( in_array( 'read_jurnal_umum', $cap ) ){ ?>
							<li><a href="<?php echo base_url('transaksi/jurnal_umum'); ?>" target="Jurnal Umum">Jurnal Umum</a></li>
							<?php } ?>
							
							<li class="dropdown-submenu">
								<a href="#stock">Booking Cargo</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_booking_cargo_air', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/booking_cargo_air'); ?>" target="Booking Cargo Air">Booking Cargo (Air)</a></li>
									<?php }
                                     if( in_array( 'read_booking_cargo_sea', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/booking_cargo_sea'); ?>" target="Booking Cargo Sea">Booking Cargo (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>
		
							<li class="dropdown-submenu">
								<a href="#stock">Carrier Booking</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_carrier_booking_air', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/carrier_booking_air'); ?>" target="Carrier Booking Air">Carrier Booking (Air)</a></li>
									<?php }
                                     if( in_array( 'read_carrier_booking_sea', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/carrier_booking_sea'); ?>" target="Carrier Booking Sea">Carrier Booking (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Export Master</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_export_master'); ?>" target="Export Master (Air)">Export Master (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_export_master'); ?>" target="Export Master (Sea)">Export Master (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Gross Profit Export</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_gross_profit_export'); ?>" target="Gross Profit Export (Air)">Gross Profit Export (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_gross_profit_export'); ?>" target="Gross Profit Export (Sea)">Gross Profit Export (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Gross Profit Import</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_gross_profit_import'); ?>" target="Gross Profit Import (Air)">Gross Profit Import (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_gross_profit_import'); ?>" target="Gross Profit Import (Sea)">Gross Profit Import (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Import Master</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_import_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_import_master'); ?>" target="Import Master (Air)">Import Master (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_import_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_import_master'); ?>" target="Import Master (Sea)">Import Master (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Shipment Inbound Entry</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_shipment_inbound_entry_air', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/shipment_inbound_entry_air'); ?>" target="Shipment Inbound Entry(Air)">Shipment Inbound Entry (Air)</a></li>
									<?php }
                                     if( in_array( 'read_shipment_inbound_entry_sea', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/shipment_inbound_entry_sea'); ?>" target="Shipment Inbound Entry(Sea)">Shipment Inbound Entry (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Invoice Ar</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_invoice_ar'); ?>" target="Invoice Ar (Air)">Invoice Ar (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_invoice_ar'); ?>" target="Invoice Ar (Sea)">Invoice Ar (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#stock">Invoice Ap</a>
								<ul class="dropdown-menu submenu-show submenu-hide">
								<?php if( in_array( 'read_air_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/air_invoice_ap'); ?>" target="Invoice Ap (Air)">Invoice Ap (Air)</a></li>
									<?php }
                                     if( in_array( 'read_sea_export_master', $cap ) ){ ?>
									<li><a href="<?php echo base_url('transaksi/sea_invoice_ap'); ?>" target="Invoice Ap (Sea)">Invoice Ap (Sea)</a></li>
									<?php }
                                     ?> 
									 </ul>
							</li>

						</ul>
					</li>
					<?php } ?>
					<?php if( in_array( 'read_lap_jurnal', $cap )
					){ ?>
					<li class="dropdown" id="nav_laporan">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#laporan">
						<i class="icon-file icon-white"></i> Laporan<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php if( in_array( 'read_lap_stock', $cap ) ){ ?>
							<li><a href="<?php echo base_url('laporan/stock'); ?>" target="Laporan Stock">Stock</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>
					<?php if( in_array( 'read_user', $cap )
					){ ?>
					<li class="dropdown" id="nav_laporan">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#fasilitas">
						<i class="icon-folder-close icon-white"></i> Fasilitas<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php if( in_array( 'read_user', $cap ) ){ ?>
							<li><a href="<?php echo base_url('fasilitas/user'); ?>" target="User">User</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>
			
				</ul>
				<ul class="nav pull-right">
					<li class="dropdown" id="fat-menu">
						<a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop3" href="#"><i class="icon-user icon-white"></i>
						<?php if( isset( $name ) ) $username = $name; // transition, deprecated soon ?>
						<?php echo ucwords( strtolower( $username ) ); ?> <b class="caret"></b></a>
						<ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
							<li><a href="/"><i class="icon-asterisk"></i> HOME</a></li>
							<li><a href="<?php echo base_url('auth/change_password'); ?>"><i class="icon-lock"></i> Update Password</a></li>
							<li><a href="<?php echo base_url('auth/logout'); ?>"><i class="icon-off"></i> Logout</a></li>
							<li class="divider"></li>
							<li><a>Version</a></li>
							<li><a>v.0.5 - 10 March 2013</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>