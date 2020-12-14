@extends('layouts.clients.clientmaster')

@section('title', $job->title . ' | My Projects - ' . Auth::user()->name)
@section('content')

<!-- ========== MAIN ========== -->
<main id="content" role="main" class="bg-light">

    <!-- Content Section -->
    <div class="container space-1 space-top-lg-1 ">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <a class="btn btn-sm btn-ghost-secondary" href="{{ route('jobs.index') }}">
                            <i class="fa fa-angle-left mr-1"></i>
                            Projects List
                        </a>
                        <h5 class="card-header-title">{{ $job->title }} <i class="text-muted">@if($job->paid_at == NULL)
                                (Unpaid) @endif </i>
                        </h5>

                        <a class="btn btn-sm btn-ghost-secondary" href="#">
                            <i class="fas fa-file-download mr-1"></i>
                            Download .PDF
                        </a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mb-4 mb-md-0">
                                <div class="mb-4">
                                    <small class="text-cap">Delivery: {{ $job->delivery_time }}</small>
                                    <h5><i class="fa fa-user-check mr-1"></i>Hired Freelancer: <a
                                            class="btn btn-sm btn-ghost-secondary pl-1"
                                            href="#">{{ $job->candidate->name ?? '(to be choosen)' }} <i
                                                class="text-muted">@if($job->paid_at == NULL) (Unpaid) @endif </i></a>
                                    </h5>
                                </div>

                                <div>
                                    <small class="text-cap">Total Budget</small>
                                    <h4 class="text-primary">NPR {{ $job->budget }}</h4>

                                    @if($job->paid_at == NULL)
                                    <div class="card">
                                        <div class="card-header"><b>Pay Now</b></div>
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('jobs.pay', $job) }}"
                                                class="card-form mb-3">
                                                @csrf
                                                <input type="hidden" name="payment_method" class="payment-method">
                                                <div class="col-12 col-md-10 px-0">
                                                    <input class="StripeElement mb-3" name="card_holder_name"
                                                        placeholder="Card holder name" required>
                                                    <div id="card-element"></div>
                                                    <div id="card-errors" class="feedback" style="color: red;"
                                                        role="alert"></div>
                                                    <div class="form-group mt-3">
                                                        <button type="submit" class="btn btn-primary pay">
                                                            Pay
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="mt-4">
                                    <p>{{ $job->description }}</p>
                                </div>

                                <small class="text-cap my-2 mt-4 font-weight-bold">Associated File(s)</small>
                                <div class="row mx-n1 mb-5 d-flex attachment-container">
                                    @if($job->attachments)
                                    @foreach($job->attachments as $key => $media)
                                    <a class="attachment-box ripple-effect" href="{{ $media->getUrl() }}"
                                        target="_blank">
                                        <span>Attachment</span></a>
                                    </a>
                                    @endforeach
                                    @endif
                                </div>
                                <!-- End Row -->
                            </div>

                            <div class="col-md-4 text-md-right">
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure to delete the Job?');"
                                    style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-white mr-1 mb-0 mb-md-2"
                                        value="Delete Job">
                                </form>
                                <a class="btn btn-sm btn-primary transition-3d-hover mb-0 mb-md-2" href="">Update</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Body -->

                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header" id="biddings">
                        <h5 class="card-header-title">Proposal Biddings</h5>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <!-- List Group -->
                        <ul class="list-group mb-5">
                            <!-- List Item -->
                            @foreach($job->proposals->sortByDesc('created_at') as $key => $proposal)
                            <li class="list-group-item">
                                <div class="mb-2">
                                    <h5>{{ $proposal->candidate->name ?? '' }} <span
                                            class="badge badge-primary ml-1">Verified</span></h5>
                                </div>
                                <div class="media">
                                    <img class="avatar avatar-sm mr-3"
                                        src="{{ asset($proposal->candidate->avatar ?? '') }} " alt="">

                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-sm mb-3 mb-sm-0">
                                                <span
                                                    class="d-block text-dark">{{ $proposal->comment ?? 'No Comments'}}</span>
                                                <small class="d-block text-muted">Bidded at:
                                                    {{ $proposal->created_at ?? '' }}</small>
                                                <div class="mt-4">
                                                    <p>{{ $proposal->proposal_text }}</p>
                                                </div>

                                                <small class="text-cap my-2 mt-5 font-weight-bold">Associated
                                                    File(s)</small>
                                                <div class="row mx-n1 d-flex attachment-container">
                                                    @if($proposal->attachments)
                                                    @foreach($proposal->attachments as $key => $media)
                                                    <a class="attachment-box ripple-effect"
                                                        href="{{ $media->getUrl() }}" target="_blank">
                                                        <span>Attachment</span></a>
                                                    </a>
                                                    @endforeach
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="col-sm-auto">
                                                @if($job->candidate_id == NULL && !$job->paid_at == NULL)
                                                <form action="{{ route("jobs.update", [$job->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="candidate_id"
                                                        value="{{ $proposal->candidate_id }}" />

                                                    <button type="submit" class="btn btn-xs btn-white mr-2 my-2"><i
                                                            class="fa fa-user-alt mr-1"></i>Hire Freelancer
                                                    </button>
                                                </form>
                                                @else
                                                <b> Payment must be done before you can hire.</b>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <span class="mt-4 center text-muted text-center font-italic">(End)</span>
                        </ul>
                        <!-- End List Group -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Project History</h5>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th>Reference</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Updated</th>
                                    <th>Invoice</th>
                                    <th style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">#3682303</a></td>
                                    <td><span class="badge badge-soft-warning">Pending</span></td>
                                    <td>NPR</td>
                                    <td>22/04/2020</td>
                                    <td><a class="btn btn-xs btn-white" href="../pages/invoice.html"><i
                                                class="fas fa-file-download mr-1"></i> PDF</a></td>
                                    <td><a class="btn btn-xs btn-white" href="javascript:;" data-toggle="modal"
                                            data-target="#invoiceReceiptModal"><i class="fas fa-eye mr-1"></i> Quick
                                            view</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">#2333234</a></td>
                                    <td><span class="badge badge-soft-success">Successful</span></td>
                                    <td>NPR</td>
                                    <td>22/04/2019</td>
                                    <td><a class="btn btn-xs btn-white" href="../pages/invoice.html"><i
                                                class="fas fa-file-download mr-1"></i> PDF</a></td>
                                    <td><a class="btn btn-xs btn-white" href="javascript:;" data-toggle="modal"
                                            data-target="#invoiceReceiptModal"><i class="fas fa-eye mr-1"></i> Quick
                                            view</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">#9834283</a></td>
                                    <td><span class="badge badge-soft-success">Successful</span></td>
                                    <td>NPR</td>
                                    <td>22/04/2018</td>
                                    <td><a class="btn btn-xs btn-white" href="../pages/invoice.html"><i
                                                class="fas fa-file-download mr-1"></i> PDF</a></td>
                                    <td><a class="btn btn-xs btn-white" href="javascript:;" data-toggle="modal"
                                            data-target="#invoiceReceiptModal"><i class="fas fa-eye mr-1"></i> Quick
                                            view</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content Section -->
</main>
<!-- ========== END MAIN ========== -->

@endsection

@section('style')
<style>
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
@endsection

@section('script')
@if(!$job->paid_at)
<script src="https://js.stripe.com/v3/"></script>
<script>
    let stripe = Stripe("{{ env('STRIPE_KEY') }}")
        let elements = stripe.elements()
        let style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        }
        let card = elements.create('card', {style: style})
        card.mount('#card-element')
        let paymentMethod = null
        $('.card-form').on('submit', function (e) {
            $('button.pay').attr('disabled', true)
            if (paymentMethod) {
                return true
            }
            stripe.confirmCardSetup(
                "{{ $intent->client_secret }}",
                {
                    payment_method: {
                        card: card,
                        billing_details: {name: $('.card_holder_name').val()}
                    }
                }
            ).then(function (result) {
                if (result.error) {
                    $('#card-errors').text(result.error.message)
                    $('button.pay').removeAttr('disabled')
                } else {
                    paymentMethod = result.setupIntent.payment_method
                    $('.payment-method').val(paymentMethod)
                    $('.card-form').submit()
                }
            })
            return false
        })
</script>
@endif
@endsection