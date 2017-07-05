import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { MaterialModule, MdIconModule, MdNativeDateModule } from '@angular/material';
import { FlexLayoutModule } from '@angular/flex-layout';
import 'hammerjs';

import { AppComponent } from './app.component';
import { AppRoutingModule } from './routing/app-routing.module';
import { AccueilComponent } from './apps/accueil/accueil.component';
import { ContactFauneComponent } from './apps/contact-faune/contact-faune.component';
import { ContactFloreComponent } from './apps/contact-flore/contact-flore.component';
import { SidenavItemsComponent } from './components/sidenav-items/sidenav-items.component';
import { NavService } from './services/nav.service';
import { PageNotFoundComponent } from './components/page-not-found/page-not-found.component';

@NgModule({
  declarations: [
    AppComponent,
    AccueilComponent,
    ContactFauneComponent,
    ContactFloreComponent,
    SidenavItemsComponent,
    PageNotFoundComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MaterialModule,
    FlexLayoutModule,
    AppRoutingModule,
    MdIconModule,
    MdNativeDateModule
  ],
  providers: [NavService],
  bootstrap: [AppComponent]
})
export class AppModule { }
