@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Kontak</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Edit Kontak</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact.update', $contact->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="phone">No Telp</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{ $contact->phone }}" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <input type="text" name="address" class="form-control" id="address" value="{{ $contact->address }}" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="share">Share</label>
                                        <input type="text" name="share" class="form-control" id="share" value="{{ $contact->share }}" />
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn
