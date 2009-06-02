<?php
/*
 * Copyright (c)  2009, Tracmor, LLC
 *
 * This file is part of Tracmor.
 *
 * Tracmor is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tracmor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tracmor; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

	include('../includes/header.inc.php');
	$this->RenderBegin();
?>
<!-- Begin Header Menu -->
<?php
	$this->ctlHeaderMenu->Render();
?>
<!-- End Header Menu -->
<!-- Begin Shortcut Menu -->
<?php
	$this->ctlShortcutMenu->Render();
?>
<!-- End Shortcut Menu -->
		</td>
		<td>
			<img src="../images/empty.gif" width="10">
		</td>
		<td width="100%" valign="top">
		<?php $this->ctlAssetEdit->Render(); ?>
		<?php if (!$this->intTransactionTypeId && QApplication::QueryString('intAssetId')) { ?>
		<br class="item_divider" />
		<?php $this->lblChildAssets->Render(); ?>
	  <?php $this->pnlAddChildAsset->Render(); ?>
    <?php $this->dtgChildAssets->RenderWithError(); ?>
	  <?php $this->btnChildAssetsRemove->Render() . "&nbsp;" . $this->btnReassign->Render() . "&nbsp;" . $this->btnLinkToParent->Render() . "&nbsp;" . $this->btnUnlink->RenderWithError(); ?>
    <br class="item_divider" />
    <?php }
    if ($this->ctlAssetSearchTool) {
    	$this->ctlAssetSearchTool->Render();
    }
	  if ($this->ctlAssetEdit->blnEditMode || $this->intTransactionTypeId) $this->ctlAssetTransact->Render(); ?>
    <br class="item_divider" />
	<?php $this->RenderEnd() ?>
	<?php require_once('../includes/footer.inc.php'); ?>