{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.master')

@section('title')
    @lang('server.config.sftp.header')
@endsection

@section('content-header')
    <h1>@lang('server.config.sftp.header')<small>@lang('server.config.sftp.header_sub')</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">@lang('strings.home')</a></li>
        <li><a href="{{ route('server.index', $server->uuidShort) }}">{{ $server->name }}</a></li>
        <li>@lang('navigation.server.configuration')</li>
        <li class="active">@lang('navigation.server.sftp_settings')</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">@lang('Conexão via SFTP')</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">@lang('CONEXÃO PARA ANDROID')</label>
                    <div>
                        <input type="text" class="form-control" readonly value="Servidor = {{ $node->fqdn }}" />
                        <input type="text" class="form-control" readonly value="Porta = {{ $node->daemonSFTP }}" />
                        </div>
                       
                     <div>
                          <label class="control-label">@lang('CONEXÃO PARA PC')</label>

                         <input type="text" class="form-control" readonly value="sftp://{{ $node->fqdn }}:{{ $node->daemonSFTP }}" /> 


                         </div>
 
                <div class="form-group">
                    <label for="password" class="control-label">@lang('Nome De Usuário Para Conexão')</label>
                    <div>
                        <input type="text" class="form-control" readonly value="{{ auth()->user()->username }}.{{ $server->uuidShort }}" />
                    </div>
              <label for="password" class="control-label">@lang('Obs: A Senha é A Mesma do Seu Login')</label>
                <h3 class="small text-muted no-margin-bottom">@lang('Aviso,  Não Deletar Arquivos Que São Necessários Para Inicialização')</h3>
              </div>
<div> 
<h3>Downloand Do Es File Explorer Para Android</h3>
 <a href="https://es-file-explorer.br.uptodown.com/android">DOWNLOAND</a>    

 </div>
  
<div>

<h3>Downloand do File Zila Para PC</h3>

 <a href="https://filezilla-project.org/download.php?platform=win64">DOWNLOAND</a>



 </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    {!! Theme::js('js/frontend/server.socket.js') !!}
@endsect
