<div class="modal fade details-4" id="details-4" tabindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">

	<div class="modal-dialog model-lg" home-modal>
		<div class="modal-content home-modal">



			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">White and colored emulsion</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="center-block">
								<img src="imgs/emulsion-int.jpg" alt="interior emulsions" class="details img-responsive" />
							</div>
						</div>

						<div class="col-lg-6">
							<h4>Details</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.</p>
							<hr>
							<p>Price: $8,500</p>
							<p>Brand: emulsion</p>

							<form action="add-to-cart.php" method="post">
								<div class="form-group mb-0">
									<div class="col-xs-3" id="quantity-label">
										<label for="quantity">Quantity: </label>
										<input type="number" name="quantity" id="quantity" class="form-control" required />
									</div>
									<div class="mt-0">
										<label for="type">Type: </label>
										<select class="text-success text-center form-control" id="type" name="type" required>	
											<option value=""></option>
											<option value="Off-white emulsion">Off-white</option>
											<option value="Cyan emulsion">Cyan</option>
											<option value="Aquammarin emulsion">Aquammarin</option>
										</select>
									</div>
								</div>

								
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal">Close</button>	
								<button type="submit" name="send" class="btn btn-success"><span class="fa fa-shopping-cart"></span> Add to cart</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>