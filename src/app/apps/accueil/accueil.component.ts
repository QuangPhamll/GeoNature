import { Component, OnInit, Inject } from '@angular/core';
import {APP_CONFIG , CONFIG, AppConfig} from 'conf/app.config';
import { NavService } from '../../services/nav.service';
import { MapService } from '../../services/map.service';
import { CarouselConfig } from 'ngx-bootstrap/carousel';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.scss'],
  providers: [MapService, { provide: APP_CONFIG, useValue: CONFIG }, {provide: CarouselConfig, useValue: {interval: 4000, noPause: true}}]
})
export class AccueilComponent implements OnInit {
  private appName: string;
  private welcomeMessage: string;
  private shortMessage: string;

  constructor(private mapService: MapService, @Inject(APP_CONFIG) private config: AppConfig, private _navService: NavService) {
    _navService.setAppName('Accueil');
    this.appName =  config.appName;
    this.welcomeMessage = config.welcomeMessage;
    this.shortMessage = config.shortMessage;
  }

  ngOnInit() {
  }

}
