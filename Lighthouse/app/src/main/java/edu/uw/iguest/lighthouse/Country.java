package edu.uw.iguest.lighthouse;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Country extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_country);
    }

    public void findPal(View view) {
        Intent intent = new Intent(Country.this, FindPal.class);
        startActivity(intent);
    }
}
