<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peticione[]|\Cake\Collection\CollectionInterface $peticiones
 */
?>
<div class="home-index" data-view="home/index" data-userHasSignedBannerPetition="" data-fetch_summary="{&quot;featuredTopics&quot;:{&quot;collection&quot;:&quot;FeaturedTopicCollection&quot;,&quot;params&quot;:{&quot;locale&quot;:&quot;es-ES&quot;}},&quot;quotes&quot;:{&quot;collection&quot;:&quot;ManagedListQuoteCollection&quot;,&quot;params&quot;:{&quot;locale&quot;:&quot;es-ES&quot;}},&quot;featuredVictories&quot;:{&quot;collection&quot;:&quot;FeaturedVictoriesCollection&quot;,&quot;params&quot;:{&quot;locale&quot;:&quot;es-ES&quot;,&quot;country_code&quot;:&quot;ES&quot;}}}">
    <div class="emergency_banner" data-view="components/emergency_banner" data-user_has_signed_banner_petition="" data-context="home" data-lazy="true"></div>
    <div class="hide-fully" data-view="home/components/notice">
        <div class="hidden-xs">
            <div class="container">
                <div class="flash-message type-default pvxs phs border-b border-l border-r border-rounded-b">
                    <div class="symbol symbol-trending type-branded"></div><span> </span><a href="#" class="type-branded"></a>
                </div>
            </div>
        </div>
        <div class="visible-xs">
            <div class="flash-message type-default paxs border-b">
                <div class="symbol symbol-trending type-branded"></div><a href="#" class="type-branded"></a>
            </div>
        </div>
    </div>
    <div id="home-container" class="container">
        <div class="home-intro mvxl txt-c pvxxxl xs-pbn">
            <h1 class="type-xl">La mayor plataforma de peticiones del mundo</h1>
            <p class="type-l">464.547.951&nbsp;personas han pasado a la acción.&nbsp;<br class="visible-xs hidden-sm"><a href="impact.html">Victorias cada día.</a></p><a href="<?= $this->Url->build('/') ?>peticiones/add" class="js-sap-link btn btn-action btn-big mvl">Inicia una petición</a>
        </div>

        <div class="row mtl xs-mtn sm-mtn">
            <div class="col-md-12 plxxs xs-plxs md-plxs sm-plxs">
                <div class="row home-discover-feed pbxxl">
                    <h3 class="mls mtxxxl">Mira lo que está pasando en Change.org</h3>

                    <!-- <div data-view="components/discover_feed discover_card_container" data-model_id="petition_30379672" data-model_name="discover_feed_item" data-lazy_loaded="true" data-render="true" data-fetch_summary="{&quot;model&quot;:{&quot;model&quot;:&quot;DiscoverFeedItem&quot;,&quot;id&quot;:&quot;petition_30379672&quot;}}">
                        <?php foreach ($peticiones as $peticione) : ?>
                            <div class="js-discover-card">
                                <div class="bg-brighter pas xs-pan">
                                    <div class="bg-default pan xs-pvxs">
                                        <div class="petition-list-item box-sm box-basic bg-brighter mvn pan border-t border-b">
                                            <div data-view="components/discover_feed/context/trending_in_tag" data-render="true" data-fetch_summary="{&quot;discover_feed_item&quot;:{&quot;model&quot;:&quot;DiscoverFeedItem&quot;,&quot;id&quot;:&quot;petition_30379672&quot;}}">
                                                <span></span><a href="<?= $this->Url->build('/') ?>peticiones/read/<?= $this->Number->format($peticione->id) ?>" rel="" class="link-block phm">
                                                    <div class="media mvxs type-s">
                                                        <div class="media-img mrxs"><span class="symbol symbol-s type-weak symbol-compact symbol-tag"></span>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media mvn">
                                                                <div class="media-img media-img-after type-weak">
                                                                    <span class="link link-subtle">Saber
                                                                        más</span>
                                                                </div>
                                                                <div class="media-body">Popular en <strong class="display-inline-block type-capitalize"><?php echo $key['categorias_id'] ?></strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="mvn">
                                            </div>
                                            <div data-view="components/discover_feed/content/trending" data-lazy_loaded="true" data-render="true" data-fetch_summary="{&quot;discover_feed_item&quot;:{&quot;model&quot;:&quot;DiscoverFeedItem&quot;,&quot;id&quot;:&quot;petition_30379672&quot;}}">
                                                <a href="<?= $this->Url->build('/') ?>peticiones/read/<?php echo $key['id'] ?>" class="clearfix link-block pbs phm">
                                                    <div class="row mtxs pts">
                                                        <div class="col-xs-12 col-sm-9">
                                                            <h4 class="mtn type-break-word"><?= h($peticione->titulo) ?></h4>
                                                            <div class="hidden-xs">
                                                                <div data-view="components/discover_feed/read_more" data-num_lines="3" data-render="true">
                                                                    <div style="max-height: 57px;" class="discover-feed-read-more hide-overflow position-relative type-s ">
                                                                        <p class="js-description type-break-word">
                                                                            <?= h($peticione->titulo) ?></p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row pts xs-ptn">
                                                                <div class="col-xs-6">
                                                                    <div class="media-profile media-profile-small-height type-s">
                                                                        <div class="txt-m">
                                                                            <div class="type-ellipsis">
                                                                                <strong class=""><?php echo $key['name'] ?></strong>
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
                                                                                <img src="data:image/jpeg;base64,<?php echo base64_encode($key->files->filedata) ?>" alt="" class="image-cropper-nodrag position-absolute-center  ">
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
                                                                                <img src="data:image/jpeg;base64,<?php echo base64_encode($key->files->filedata) ?>" alt="" class="image-cropper-nodrag position-absolute-center  ">
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
                        <?php endforeach; ?>
                    </div> -->
                </div>

            </div>