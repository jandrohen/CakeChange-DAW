<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peticione[]|\Cake\Collection\CollectionInterface $peticiones
 */
?>

<div class="row mtl xs-mtn sm-mtn">
    <div class="col-md-9 plxxs xs-plxs md-plxs sm-plxs">
        <div data-view="components/discover_feed/index" data-view_context="home_index" data-lazy="true" data-collection_name="DiscoverFeedCollection">

            <div class="js-discover-card-list">

                <div data-view="components/discover_feed discover_card_container" data-model_id="petition_30379672" data-model_name="discover_feed_item" data-lazy_loaded="true" data-render="true" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;DiscoverFeedItem&quot;,&quot;id&quot;:&quot;petition_30379672&quot;}}">
                    <?php foreach ($peticiones as $peticione) : ?>
                        <div class="js-discover-card">
                            <div class="bg-brighter pas xs-pan">
                                <div class="bg-default pan xs-pvxs">
                                    <div class="petition-list-item box-sm box-basic bg-brighter mvn pan border-t border-b">
                                        <div data-view="components/discover_feed/context/trending_in_tag" data-render="true" data-fetch_summary="{&quot;discover_feed_item&quot;:{&quot;model&quot;:&quot;DiscoverFeedItem&quot;,&quot;id&quot;:&quot;petition_30379672&quot;}}">
                                            <span></span><a href="<?= $this->Url->build('/') ?>peticiones/view/<?= $this->Number->format($peticione->id) ?>" rel="" class="link-block phm">
                                                <div class="media mvxs type-s">
                                                    <div class="media-img mrxs"><span class="symbol symbol-s type-weak symbol-compact symbol-tag"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media mvn">
                                                            <div class="media-img media-img-after type-weak">
                                                                <span class="link link-subtle">Saber
                                                                    más</span>
                                                            </div>
                                                            <div class="media-body">Popular en <strong class="display-inline-block type-capitalize"><?= $peticione->has('categoria') ? $this->Html->link($peticione->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $peticione->categoria->nombre]) : '' ?></strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="mvn">
                                        </div>
                                        <div data-view="components/discover_feed/content/trending" data-lazy_loaded="true" data-render="true" data-fetch_summary="{&quot;discover_feed_item&quot;:{&quot;model&quot;:&quot;DiscoverFeedItem&quot;,&quot;id&quot;:&quot;petition_30379672&quot;}}">
                                            <a href="<?= $this->Url->build('/') ?>peticiones/view/<?= $this->Number->format($peticione->id) ?>" class="clearfix link-block pbs phm">
                                                <div class="row mtxs pts">
                                                    <div class="col-xs-12 col-sm-9">
                                                        <h4 class="mtn type-break-word"><?= h($peticione->titulo) ?></h4>
                                                        <div class="hidden-xs">
                                                            <div data-view="components/discover_feed/read_more" data-num_lines="3" data-render="true">
                                                                <div style="max-height: 57px;" class="discover-feed-read-more hide-overflow position-relative type-s ">
                                                                    <p class="js-description type-break-word">
                                                                        <?= h($peticione->descripcion) ?></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pts xs-ptn">
                                                            <div class="col-xs-6">
                                                                <div class="media-profile media-profile-small-height type-s">
                                                                    <div class="txt-m">
                                                                        <div class="type-ellipsis">
                                                                            <strong class=""><?= $this->Number->format($peticione->users_id) ?> </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 txt-r">
                                                                <div class="media-profile media-profile-small-height type-s">
                                                                    <div class="txt-m"><span class="symbol symbol-supporters type-branded" aria-hidden="true"></span><span class=""><?= $this->Number->format($peticione->firmantes) ?> firmantes</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-3">
                                                        <div class="hidden-xs mlxs">
                                                            <div class="photo-component" data-view="components/photo" data-model_id="225854988" data-model_name="Media" data-type="petition" data-ratio="square" data-size="square" data-render="true" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;Media&quot;,&quot;id&quot;:&quot;225854988&quot;}}">
                                                                <div class="flex-embed  ">
                                                                    <div class="flex-embed-ratio flex-embed-square">
                                                                        <div class="flex-embed-content">
                                                                            <div class="image">
                                                                                <?php echo $this->Html->image('/webroot/files/Peticiones/photo/' . $peticione->photo, ['alt' => 'Portada', 'url =' => ['contoller' => 'Peticiones', 'action' => 'view', $peticione->id]]); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="visible-xs mln mbxxs mts">
                                                            <div class="photo-component" data-view="components/photo" data-model_id="225854988" data-model_name="Media" data-type="petition" data-render="true" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;Media&quot;,&quot;id&quot;:&quot;225854988&quot;}}">
                                                                <div class="flex-embed  ">
                                                                    <div class="flex-embed-ratio flex-embed-16x9">
                                                                        <div class="flex-embed-content">
                                                                            <div class="image">
                                                                                <?php echo $this->Html->image('/webroot/files/Peticiones/photo/' . $peticione->photo, ['alt' => 'Portada', 'url =' => ['contoller' => 'Peticiones', 'action' => 'view', $peticione->id]]); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            <?php endforeach; ?>
            </div>

        </div>
    </div>


    <div class="col-md-3 hidden-sm hidden-xs js-featured-topics-list position-sticky position-top">
        <section class="plm mtxxxl ptl">
            <div class="topics mbn">
                <h5 class="mtn sm-mlm xs-mlxs">Temas</h5>
                <div class="hidden-xs hidden-sm">
                    <a href="t/sanidadfbe5.html?source_location=homepage" title="sanidad" class="pill mhxxxs mtxxxs mbxxs type-s type-capitalize">sanidad</a>
                </div>
                <div class="visible-xs visible-sm">
                    <div class="row">
                        <hr class="mtn">
                        <div class="list-xs-scrollable list-sm-scrollable pvxxs plm xs-plxs">
                            <ul class="list-inline pbxxs list-xs-scrollable-row list-sm-scrollable-row row">
                                <li class=list-xs-scrollable-item list-sm-scrollable-item mlxs mtxxs><a href="t/sanidadfbe5.html?source_location=homepage" title="sanidad" class="pill bg-brighter mln mrxxxs mtxxxs mbxxs xs-man">
                                        <div class="type-capitalize type-ellipsis">sanidad</div>
                                    </a></li>
                            </ul>
                        </div>
                        <hr class="mbn">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>