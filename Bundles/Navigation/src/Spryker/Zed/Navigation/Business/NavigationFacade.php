<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Navigation\Business;

use Generated\Shared\Transfer\NavigationTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\Navigation\Business\NavigationBusinessFactory getFactory()
 */
class NavigationFacade extends AbstractFacade implements NavigationFacadeInterface
{

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\NavigationTransfer $navigationTransfer
     *
     * @return \Generated\Shared\Transfer\NavigationTransfer
     */
    public function createNavigation(NavigationTransfer $navigationTransfer)
    {
        return $this->getFactory()
            ->createNavigationCreator()
            ->createNavigation($navigationTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\NavigationTransfer $navigationTransfer
     *
     * @return \Generated\Shared\Transfer\NavigationTransfer
     */
    public function updateNavigation(NavigationTransfer $navigationTransfer)
    {
        return $this->getFactory()
            ->createNavigationUpdater()
            ->updateNavigation($navigationTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\NavigationTransfer $navigationTransfer
     *
     * @return \Generated\Shared\Transfer\NavigationTransfer|null
     */
    public function findNavigation(NavigationTransfer $navigationTransfer)
    {
        return $this->getFactory()
            ->createNavigationReader()
            ->findNavigation($navigationTransfer);
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\NavigationTransfer $navigationTransfer
     *
     * @return void
     */
    public function deleteNavigation(NavigationTransfer $navigationTransfer)
    {
        $this->getFactory()
            ->createNavigationDeleter()
            ->deleteNavigation($navigationTransfer);
    }

}
