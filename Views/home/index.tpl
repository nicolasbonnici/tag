{% extends 'layout.tpl' %} 

{% block favicon %}/lib/img/aps/tag/icon.png{% endblock favicon %} {% block meta_title %}Tag{% endblock meta_title %}

{% block meta_description %}Manage Tags{% endblock meta_description %}

{% block js %}{% endblock %}

{% block css %}
<link href="/lib/bundles/{{sBundle}}/css/tag.css" rel="stylesheet">
{% endblock %}

{% block modal %}
<div class="modal fade" id="modal-tag" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-tag-content">
            <p>&nbsp;</p>
        </div>
    </div>
</div>
{% endblock %}

{% block main %}
<div class="container">
    <div class="row clearfix transparentBlackBg rounded well ui-transition ui-shadow">
        <div class="col-md-12 column">
            <div class="page-header">
                <h1 class="showOnHover">
                    <img src="/lib/bundles/tag/img/icon.png" alt="App icon" />Tag <small class="targetToShow">1.0</small>
                </h1>
            </div>
        </div>
        <div class="col-md-12 column">
            <div class="btn-group btn-group-lg">
                <button type="button" class="ui-reload btn btn-lg btn-default">
                    <span class="glyphicon glyphicon-refresh"></span> Raffraichir
                </button>
                <button href="#modal-tag" type="button" class="hide btn btn-lg btn-danger ui-sendxhr ui-delete-tags"
                    data-url="/tag/home/delete/" data-selector="#modal-create-content" role="button" data-toggle="modal">
                    <span class="glyphicon glyphicon-trash"></span> Supprimer
                </button>
                <button href="#modal-tag" type="button" class="btn btn-lg btn-info ui-sendxhr"
                    data-url="/tag/home/create/" data-selector="#modal-tag-content" role="button" data-toggle="modal">
                    <span class="glyphicon glyphicon-file"></span> New tag
                </button>
            </div>

            <div id="tagList" class="ui-loadable" data-entity="Tag" data-view="tags/list.tpl" data-orderby="idtag" data-order="DESC" data-bundle="crud" data-controller="list" data-action="index">
            </div>
        </div>
    </div>
</div>
{% endblock %}
