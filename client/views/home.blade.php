                        <div class="list-item">
                            @foreach(range(1,4) as $val)
                            <div class="item">
                                <div class="item-inner">
                                    <div class="image" style="background-image: url('{{theme_asset('img/advt.jpg')}}');">
                                        <figure>[<a href="{{guard_url('edit')}}/{{$val}}" class="txt-red">Edit</a>] [<a href="{{guard_url('delete')}}/{{$val}}">Delete</a>]</figure>
                                    </div>
                                    <div class="description">
                                        <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="mt0">My advertisement title {{$val}}

                                               <div class="pull-right"> <span class="label label-primary">Verified</span>  &nbsp;
                                             <span class="label label-success ">Approved</span></div>
                                         </h3>
                                            <h4>Sub title {{$val}}</h4>
                                        </div>

                                        </div>

                                        <p>Rendering problems can arise when you have dozens of inline labels within a narrow container, each containing its own inline-block element (like an icon). The way around this is setting display: inline-block;. For context and an example, see #13219.Rendering problems can arise when you have dozens of inline labels within a narrow container</p>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                        <section class="pagination-wraper">
                            <div class="text-center">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="disabled previous">
                                            <a href="#" aria-label="Previous">
                                                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="active"><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="next">
                                            <a href="#" aria-label="Next">
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </section>
