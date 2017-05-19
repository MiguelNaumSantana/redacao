@extends('templates.template')
@section('content')
<section id="main-content">
    
          <section class="wrapper site-min-height">
              <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Advanced Form validations
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                        {!! Form::open(['class' => 'cmxform form-horizontal tasi-form']) !!}
                                        
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Nome do concurso</label>
                                          <div class="col-lg-10">
                                              {!!Form::text('nome',null,['class'=>'form-control'])!!}
                                              
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                  <label class="control-label col-lg-2">Inicio/Termino do concurso</label>
                                  <div class="col-lg-10">
                                      <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                          {!!Form::text('dt_inicio',null,['class'=>'form-control dpd1 form_datetime '])!!}
                                          
                                          <span class="input-group-addon">Até</span>
                                          {!!Form::text('dt_fim',null,['class'=>'form-control dpd1 form_datetime '])!!}
                                      </div>
                                      
                                  </div>
                              </div>
                                      <div class="form-group">
                                  <label class="control-label col-lg-2">Inicio/Termino das correções</label>
                                  <div class="col-lg-10">
                                      <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                          {!!Form::text('dt_inicio_correcao',null,['class'=>'form-control dpd1 form_datetime '])!!}
                                          
                                          <span class="input-group-addon">Até</span>
                                          {!!Form::text('dt_fim_correcao',null,['class'=>'form-control dpd1 form_datetime '])!!}
                                      </div>
                                      
                                  </div>
                              </div>
                                      
                                     

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10 text-left">
                                              <button class="btn btn-danger" type="submit">Salvar</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  {!! Form::close() !!}
                              </div>
                          </div>
                      </section>
                  </div>
          </section>
      </section>
@endsection      